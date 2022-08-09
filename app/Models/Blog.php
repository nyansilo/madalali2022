<?php

//Command: php artisan make:model Blog

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\BlogComment;
use App\Models\Tag;
use App\Models\BlogCategory;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
//use GrahamCampbell\Markdown\Facades\Markdown;

class Blog extends Model
{
    use HasFactory;

    //use SoftDeletes;

    protected $fillable = ['title', 'slug', 'excerpt', 'body', 'image', 'published_at', 'category_id', 'view_count','deleted_at'];
    protected $dates = ['published_at'];


    //================== MODEL RELATIONSHIPS STARTS =========================

    /**
     * Set up Blog-  Author/Admin Relationship.
     * One Blog Belong to One Admin/Author.
     */
    public function author(){
        return $this->belongsTo(Admin::class, 'author_id');
    }

    /**
     * Set up Blog - BlogCategory Relationship.
     * One Blog Belong to One BlogCategory.
     */
    public function category(){
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    /**
     * Set up Blog - Tags Relationship.
     * One Blog  has many tags.
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * Set up Blog - User/Owner Relationship.
     * One Blog has manny comments
     */
    public function comments()
    {
        return $this->hasMany(BlogComment::class); 
    } 

     //===================== SCOPE MODEL START ===============================

    /**
     * Scope Model are functions that will used in the Controller to filetr the 
     * query based on the condition defined: Decleared in the model but used in 
     * the controller when chaining the eloquent query.
     * The function must start with scope keyword and followed by any name:
     * the name used after the scope keyword will be used in the controller:eg
     * public function featuredProperties()
     * {
     *      $featuredProperties  = 
     * Property::with('owner','district','region','category')
     *                ->featured()
     *                ->paginate(3);     
     *   return *view("theme.home.index",compact('$featuredProperties'));   
     * }
     */

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at','desc');

    }

    public function scopePopular($query){
        return $query->orderBy('view_count','desc');

    }

    public function scopePublished($query)
    {
        return $query->where("published_at", "<=", Carbon::now());
    }

    public function scopeScheduled($query)
    {
        return $query->where("published_at", ">", Carbon::now());
    }

    public function scopeDraft($query)
    {
        return $query->whereNull("published_at");
    }

    public function scopeFilter($query, $term)
    {
        // check if any term entered
        if ($term)
        {
            $query->where(function($q) use ($term) {
                // $q->whereHas('author', function($qr) use ($term) {
                //     $qr->where('name', 'LIKE', "%{$term}%");
                // });
                // $q->orWhereHas('category', function($qr) use ($term) {
                //     $qr->where('title', 'LIKE', "%{$term}%");
                // });
                $q->orWhere('title', 'LIKE', "%{$term}%");
                $q->orWhere('excerpt', 'LIKE', "%{$term}%");
            });
        }
    } 

    //===================== ACCESOR ATTRIBUTE FUNCTIONS START =======================


    /**
     * Accessor the way to display content in html/php page
     * you can call the accessor in html/php template by this eg: image_url
     * Then in the model you defined it by starting with get then ImageUrl in camelCase
     * followed by Attribute: eg
     * public function getImageUrl(){}
     */ 
     public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            //public_path() is helper function for site public directory
            //{$directory}/ is simple (blog_img) folder where image get stored
            //$this->image is the image itself
            //this keyword refer this Model(Property)
            $directory = config('cms.image.directory');
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);
        }

        return $imageUrl;
    }


    public function getDefaultImgAttribute($value){

             $directory = config('cms.image.directory');
             $imageUrl = asset("{$directory}/"."default-placeholder.png");
             return $imageUrl;
    }


    public function getImageThumbUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $directory = config('cms.image.directory');
            $ext       = substr(strrchr($this->image, '.'), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path() . "/{$directory}/" . $thumbnail;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $thumbnail);
        }

        return $imageUrl;
    }

    public function getProfileUrlAttribute($value)
    {
    
        $imageUrl = "";

        //Make sure the owner has image
        if ( ! is_null($this->author->profile_picture))
        {
            $directory = config('cms.image.directory');
            //public_path() is helper function for site public directory
            //{$directory}/ is simple (img) folder where image get stored
            //$this->propertyImages[0]->image is the image itself
            //this keyword refer this Model(Property)
            $imagePath = public_path() . "/{$directory}/" . $this->author->profile_picture;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->author->profile_picture);

        }

        return $imageUrl;
    }

   public function getDefaultProfileAttribute($value){

             $directory = config('cms.image.directory');
             $imageUrl = asset("{$directory}/"."profileImg.png");
             return $imageUrl;
    }


    public function getDateAttribute($value){
        //return $this->created_at->diffForHumans();
         return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

   /*  public function getBodyHtmlAttribute($value){
        return $this->body ? Markdown::convertToHtml(e($this->body)) : NULL; 
    } 

    public function getExcerptHtmlAttribute($value){
        return $this->excerpt ? Markdown::convertToHtml(e($this->excerpt)) : NULL; 
    }  */

    public function getTagsHtmlAttribute()
    {
        $anchors = [];
        foreach($this->tags as $tag) {
            $anchors[] = '<a href="' . route('tag', $tag->slug) . '">' . $tag->name . '</a>';
        }
        return implode(", ", $anchors);
    }

     public function getShortBodyAttribute($value)
    {
        //return Str::words($this->title, 3, '...');
        return Str::limit($this->body, 200, ' ...');
    }

    public function getFullNameAttribute($value)
    {
        $firstName = $this->author->first_name;
        $lastName  = $this->author->last_name;
        $fullName  = $firstName ." ".$lastName;

        return $fullName; 
    }

    //===================== MODEL BINDING START =============================

    /**
     * This function is used for route model binding.That is instead of using id in the
     * url, we are using the slug field for SEO friendly,
     * There are two ways where model binding can be created
     * First method is using getRouteKeyName function and return the name of the field
     * public function getRouteKeyName()
     {
        return 'slug';  
     }
     * that will be used eg slug
     * Then inside the controller create a function that will take model as parameter 
     * instead of id:eg
     * public function propertyDetail(Property $property){
            return view('theme.home.property_detail', compact('property')); 
       }
     *Another of doing model binding is by RouteServiceProvider in the Provider file:
     * Then in the root function create the function as below:
     * public function boot()
     {
        Route::bind('post', function($slug) {
            return Post::published()->where('slug', $slug)->first();
        });

        parent::boot();
     }
     * where post will be the parameter passed in the web root
     * Route::get('/blog/{post}', [
        'uses' => 'BlogController@blogDetail',
        'as'   => 'blog.detail'
     ]);
     *   
     */
    public function getRouteKeyName()
    {
        return 'slug';  
    }


    //===================== OTHER FUNCTIONS START =======================
     
    public function dateFormatted($showTimes = false)
    {
        $format = "d/m/Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }

    public function dateDisplay($showTimes = false)
    {
        $format = "F d, Y";
        if ($showTimes) $format = $format . " H:i:s";
        return $this->created_at->format($format);
    }

    public function publicationLabel()
    {
        if ( ! $this->published_at) {
            return '<span class="badge bg-yellow-lt">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture()) {
            return '<span class="badge bg-blue-lt">Schedule</span>';
        }
        else {
            return '<span class="badge bg-green-lt">Published</span>';
        }
    }


    public function commentsNumber($label = 'blog')
    {
        $commentsNumber = $this->comments()->count();

        return $commentsNumber. " " . Str::plural($label, $commentsNumber);
    }

    public function blogNumber($label = 'item')
    {
        $blogNumber = $this->count();

        return $blogNumber. " " . Str::plural($label, $blogNumber);
    }



    public function blogsView($label = 'View')
    {
        $blogsNumber = $this->view_count;

        return $blogsNumber. " " . Str::plural($label, $blogsNumber);
    }

    




}
