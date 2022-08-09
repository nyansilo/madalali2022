<?php

//Command: php artisan make:model Region 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;
use App\Models\Property;
use Illuminate\Support\Str;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';

     /**
     * The attributes that are mass assignable.
     * Set up the field that will be inserted in DB.
     * @var array<string, string>
     */
    protected $fillable = [
        'name',
    ];
   
    /**
     * Set up Region-District Relationship.
     * One Region contains many Districts
     */
    public function districts(){

        return $this->hasMany(District::class, 'region_id');
    }

    /**
     * Set up Region-Properties Relationship
     * One Region contains many Properties
     */
    public function properties(){
        return $this->hasMany(Property::class, 'region_id');
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

    public function scopeCity($query){
      
        $ids = ['2','3','16','1','28','9'];
        return $query->whereIn('id', $ids);
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

        //Make sure the post has image
        if ( ! is_null($this->image))
        {
            $directory = config('cms.region_img.directory');
            //public_path() is helper function for site public directory
            //{$directory}/ is simple (region_img) folder where image get stored
            //$this->propertyImages[0]->image is the image itself
            //this keyword refer this Model(Region)
            $imagePath = public_path() . "/{$directory}/" . $this->image;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->image);

        }

        return $imageUrl;
    }

    public function getDefaultImgAttribute($value){

             $directory = config('cms.region_img.directory');
             $imageUrl = asset("{$directory}/"."default.jpg");
             return $imageUrl;
    }
    
}
