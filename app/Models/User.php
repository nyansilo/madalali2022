<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Property;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Set up User/Owner- Property  Relationship.
     * One User will have many properties.
     */

    public function properties()
    {
        return $this->hasMany(Property::class, 'owner_id');
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'author_id');
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

    //===================== ACCESOR ATTRIBUTE FUNCTIONS START =======================


    /**
     * Accessor the way to display content in html/php page
     * you can call the accessor in html/php template by this eg: image_url
     * Then in the model you defined it by starting with get then ImageUrl in camelCase
     * followed by Attribute: eg
     * public function getImageUrl(){}
     */ 

    public function getFullNameAttribute($value)
    {
        $firstName = $this->first_name;
        $lastName  = $this->last_name;
        $fullName  = $firstName ." ".$lastName;

        return $fullName; 
    }

 

 
}
