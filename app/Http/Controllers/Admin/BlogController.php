<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\BlogRequest;
use Intervention\Image\Facades\Image;

class BlogController extends BackendController
{
    
    protected $limit = 5; 
    protected $uploadPath;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->uploadPath = public_path(config('cms.image.directory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $blogs = Blog::with('category','author')->latestFirst()->paginate($this->limit);
        return view('admin.blog.index', compact('blogs'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Blog $blog)
    {
         $blog = new Blog();
      

         return view('admin.blog.create', compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(BlogRequest $request)
    {

         //below lines of code can be put in the request folder to make controller cleaner
         /*$this->validate($request, [
            'title'        => 'required',
            'slug'         => 'required|unique:posts',
            'body'         => 'required',
            'published_at' => 'date_format:Y-m-d H:i:s',
            'category_id'  => 'required'
         ]);*/

         $data = $this->handleRequest($request);
         $request->user()->blogs()->create($data);
         return redirect('/admin/blogs')->with('message', 'Your post was created successfully!');
    }

    private function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image       = $request->file('image');
            $fileName    = $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width     = config('cms.image.thumbnail.width');
                $height    = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                    ->resize($width, $height)
                    ->save($destination . '/' . $thumbnail);
            }

            $data['image'] = $fileName;
        }

        return $data;
    }


    /**

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view("admin.blog.edit", compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog     = Blog::findOrFail($id);
        $oldImage = $blog->image;
        $data     = $this->handleRequest($request);
        $blog->update($data);

        if ($oldImage !== $blog->image) {
            $this->removeImage($oldImage);
        }

        $notification = array(

            'message' => 'Your post was updated successfully!',
            'alert-type'=> 'success'
        );
        //return redirect('/admin/blogs')->with($notification);
        return redirect('/admin/blogs')->with('message', 'Your post was updated successfully!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();

        return redirect('/admin/blog')->with('trash-message', ['Your post moved to Trash', $id]);
    }


    public function forceDestroy($id)
    {
        $blog = Post::withTrashed()->findOrFail($id);
        $blog->forceDelete();

        $this->removeImage($post->image);

        return redirect('/admin/blog?status=trash')->with('message', 'Your post has been deleted successfully');
    }
   


    public function restore($id)
    {
        $blog = Blog::withTrashed()->findOrFail($id);
        $blog->restore();

        return redirect()->back()->with('message', 'You post has been moved from the Trash');
    }
    private function removeImage($image)
    {
        if ( ! empty($image) )
        {
            $imagePath     = $this->uploadPath . '/' . $image;
            $ext           = substr(strrchr($image, '.'), 1);
            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            if ( file_exists($imagePath) ) unlink($imagePath);
            if ( file_exists($thumbnailPath) ) unlink($thumbnailPath);
        }
    }
}
