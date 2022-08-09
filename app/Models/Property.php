<?php

//Command: php artisan make:model Property 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Region;
use App\Models\District;
use App\Models\PropertyCategory;
use App\Models\PropertySubCategory;
use App\Models\PropertyImage;
use App\Models\User;
 

class Property extends Model
{
    use HasFactory;

    //================== DECLARATION STARTS =========================

    //protected $table = 'properties';

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'favorite' => 'boolean',
        'price' => 'double',
    ];

    /**
     * The attributes that are mass assignable.
     * Set up the field that will be inserted in DB.
     * @var array<string, string>
     */
    protected $fillable = [
        'title', 'slug', 'description',  'category_id','subcategory_id',
        'type','favorite','price','address','region_id','district_id',
        'seller_name','seller_email','seller_phone',
    ];
    
    protected $dates = [
        'published_at',
        'deleted_at',
    ];


    //================== MODEL RELATIONSHIPS STARTS =========================

    /**
     * Set up Property - User/Owner Relationship.
     * One Property Belong to One User/Owner.
     */
    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id' );
    }

    /**
     * Set up Property - PropertyCategory Relationship.
     * One Property Belong to One PropertyCategory.
     */
    public function category(){
        return $this->belongsTo(PropertyCategory::class, 'category_id');
    }
  
    /**
     * Set up Property - PropertySubCategory Relationship.
     * One Property Belong to One PropertySubCategory.
     */
    public function subcategory(){
        return $this->belongsTo(PropertySubCategory::class, 'subcategory_id');
    }
 
    /**
     * Set up Property - District Relationship.
     * One Property Belong to One District.
     */
    public function district(){

        return $this->belongsTo(District::class, 'district_id');
    }
  
    /**
     * Set up Property - Region Relationship.
     * One Property Belong to One Region.
     */
    public function region(){

        return $this->belongsTo(Region::class, 'region_id');
    }

     /**
     * Set up Property - PropertyImage  Relationship.
     * One Property will have many propertyImages.
     */
    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class, 'property_id');
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


    public function scopeFeatured($query){
        return $query->where("is_featured", "=", 1);
    }

    public function scopeLatest($query){
        return $query->orderBy('created_at','desc');
    }

    public function scopePopular($query){
        return $query->orderBy('view','desc');
    }

  
    public function scopeRent($query){
        return $query->where('type','=','Rent');
    }

    public function scopeSale($query){
        return $query->where('type','=','Sale');
    }


    //0 =pending for review, 1= published, 2=blocked
    public function scopePending($query){
        return $query->where("status", "=", 0);
    }

    public function scopePublished($query){
        return $query->where("status", "=", 1);
    }

    public function scopeBlocked($query){
        return $query->where("status", "=", 2);
    }



    //===================== ACCESOR ATTRIBUTE FUNCTIONS START =======================


    /**
     * Accessor the way to display content in html/php page
     * you can call the accessor in html/php template by this eg: image_url
     * Then in the model you defined it by starting with get then ImageUrl in camelCase
     * followed by Attribute: eg
     * public function getImageUrl(){}
     */ 
    public function getShortTitleAttribute($value)
    {
        //return Str::words($this->title, 3, '...');
        return Str::limit($this->title, 20, ' ...');
    }


    public function getShortAddressAttribute($value)
    {
        //return Str::words($this->title, 3, '...');
        return Str::limit($this->address, 20, ' ...');
    }

    public function getMediumTitleAttribute($value)
    {
        //return Str::words($this->title, 3, '...');
        return Str::limit($this->title, 40, ' ...');
    }


    public function getMediumAddressAttribute($value)
    {
        //return Str::words($this->title, 3, '...');
        return Str::limit($this->address, 40, ' ...');
    }


    public function getImageUrlAttribute($value)
    {
    
        $imageUrl = "";

        //Make sure the post has image
        if ( ! is_null($this->propertyImages[0]->image))
        {
            $directory = config('cms.image.directory');
            //public_path() is helper function for site public directory
            //{$directory}/ is simple (img) folder where image get stored
            //$this->propertyImages[0]->image is the image itself
            //this keyword refer this Model(Property) with eloquent rel with propertyImages 
            //we can get the first image in the array using [0] notation
            $imagePath = public_path() . "/{$directory}/" . $this->propertyImages[0]->image;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->propertyImages[0]->image);

        }

        return $imageUrl;
    }

    public function getDefaultImgAttribute($value){

             $directory = config('cms.image.directory');
             $imageUrl = asset("{$directory}/"."default-placeholder.png");
             return $imageUrl;
    }


    public function getProfileUrlAttribute($value)
    {
    
        $imageUrl = "";

        //Make sure the owner has image
        if ( ! is_null($this->owner->profile_picture))
        {
            $directory = config('cms.image.directory');
            //public_path() is helper function for site public directory
            //{$directory}/ is simple (img) folder where image get stored
            //$this->propertyImages[0]->image is the image itself
            //this keyword refer this Model(Property)
            $imagePath = public_path() . "/{$directory}/" . $this->owner->profile_picture;
            //then if imagePath exist in the server we return the imageUrl
            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/" . $this->owner->profile_picture);

        }

        return $imageUrl;
    }
    public function getDefaultProfileAttribute($value){

             $directory = config('cms.image.directory');
             $imageUrl = asset("{$directory}/"."profileImg.png");
             return $imageUrl;
    }

    public function getDateAttribute($value)
    {
        return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }

    public function getFullNameAttribute($value)
    {
        $firstName = $this->owner->first_name;
        $lastName  = $this->owner->last_name;
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
    

   
    

 

}
