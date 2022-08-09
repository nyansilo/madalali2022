<?php

//Command: php artisan make:model PropertyCategory

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Property;
use App\Models\PropertySubCategory;

class PropertyCategory extends Model
{
    use HasFactory;

    protected $table ='property_categories';


    /**
     * The attributes that are mass assignable.
     * Set up the field that will be inserted in DB.
     * @var array<string, string>
     */
    protected $fillable = [
            'title','slug'
        ];
    
    /**
     * Set up PropertyCategory - PropertySubCategory Relationship.
     * One PropertyCategory contain many PropertySubCategories.
     */
    public function subCategories(){
        
        return $this->hasMany(PropertySubCategory::class, 'category_id');
    } 

    /**
     * Set up PropertyCategory - Property Relationship.
     * One PropertyCategory contain many Properties.
     */
    public function properties(){
        return $this->hasMany(Property::class, 'category_id');
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


    /**
     * This functions is used to put plural for the case where property > 1
     * It accept the label name to be changed bassed on number of counts  
     * if count>1 plural form otherwise singular form
     * strl_plural() is helper function which check on the count then assign
     * the appropiate display format
     */
    public function propertiesNumber($label = 'Property')
    {
        $propertiesNumber = $this->properties()->count();

        return $propertiesNumber. " " . Str::plural($label, $propertiesNumber);
    }

}
