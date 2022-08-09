<?php

//Command:php artisan make:model BlogTag

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;


class Tag extends Model
{
    use HasFactory;

    //protected $table = 'tags';

    //================== MODEL RELATIONSHIPS STARTS =========================

    /**
     * Set up BlogTag-  Blog Relationship.
     * One BlogTag Belong to many Blog.
     */

    public function blogs()
    {
        return $this->belongsToMany(Blog::class);
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
}
