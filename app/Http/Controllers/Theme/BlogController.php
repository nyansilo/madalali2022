<?php

//Command: php artisan make:controller 'Theme\BlogController'

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Admin; 

class BlogController extends Controller
{
   protected $limit = 3;
    public function blogs(){

        
        //\DB::enableQueryLog();
        //$posts = Post::all();
        //$posts = Post::with('author')->get();
        //return view('hotelfront.blog', compact('posts'))->render();
        //dd(\DB::getQueryLog());

        //$posts = Post::with('author')->orderBy('created_at','desc')->get();


        //this is bad practise repeating code we will use the composer service provider instead
        $blogCategories = BlogCategory::with(['blogs' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get(); 

        $blogs = Blog::with('author','category','comments')
                    ->latestFirst()
                    ->published()
                    //->filter(request('term'))
                    ->Paginate($this->limit);
        return view('theme.blog.blogs', compact('blogs','blogCategories'));
        
    }

    //public function category($id)
    //Get all blogs for particular category
    public function blogCategory(BlogCategory $blog_category)
    {
        $categoryName = $blog_category->title;

         

        $blogCategories = BlogCategory::with(['blogs' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get(); 
   
         $blogs =  $blog_category->blogs()
                            ->with('author','comments')
                            ->latestFirst()
                            ->published()
                            ->Paginate($this->limit);
         return view('theme.blog.blogs', compact('blogs','categoryName','blogCategories'));

    }

    //Get all blogs for particular category
    public function tag(BlogTag $tag)
    {
        $tagName = $tag->title;


        $categories = BlogCategory::with(['blogs' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get(); 

        $blogs = $tag->blogs()
                          ->with('author', 'category','comments')
                          ->latestFirst()
                          ->published()
                          ->simplePaginate($this->limit);

         return view("theme.blog.blogs", compact('blogs', 'tagName','categories'));
    }

    //Get all blogs for particular author
    public function author(Admin $author)
    {
        $authorName = $author->name;

        $categories = BlogCategory::with(['blogs' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get(); 
        $blogs =  $author->blogs()
                            ->with('category','tags','comments')
                            ->latestFirst()
                            ->published()
                            ->Paginate($this->limit);
         return view('theme.blog.blogs', compact('blogs','authorName','categories'));

    }

    public function blogDetail(Blog $blog){
       
       
        //this is bad practise repeating code we will use the composer service provider instead
        /*  $categories = Category::with(['posts' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get();
        
        return view('hotelfront.postdetail', compact('post','categories'));
         */


         // increament the view count in the database the clicked link/refreshed but should ip session for 
         //improvement


         //update posts set view_count = view_count + 1 whare id=?
         #method 1
         //$viewCount = (int)$post->view_count + 1;
         //$post->update(['view_count' => $viewCount]);

         #method 2:
        (int)$blog->increment('view_count');

        $blogCategories = BlogCategory::with(['blogs' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get(); 

        $blogComments = $blog->comments()->Paginate(3); 

        return view('theme.blog.blog_detail', compact('blog', 'blogComments','blogCategories'));
        
        
    }
}
