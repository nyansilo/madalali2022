<?php

//Command: php artisan make:model BlogCategory

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug'];


    //================== MODEL RELATIONSHIPS STARTS =========================

    /**
     * Set up BlogCategory - Blog Relationship.
     * One PBlogCategory has many Blogs
     */
    public function blogs(){

        return $this->hasMany(Blog::class,'category_id');
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
     * public function blogDetail(blog $blog){
            return view('theme.home.blog_detail', compact('blog')); 
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

    //===================== OTHER FUNCTION START =============================

    /**
     * This functions is used to put plural for the case where blog > 1
     * It accept the label name to be changed bassed on number of counts  
     * if count>1 plural form otherwise singular form
     * strl_plural() is helper function which check on the count then assign
     * the appropiate display format
     */
    public function blogsNumber($label = 'blog')
    {
        $blogsNumber = $this->blogs()->count();

        return $blogsNumber. " " . Str::plural($label, $blogsNumber);
    }

}
