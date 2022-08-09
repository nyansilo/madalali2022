<?php

//Command: php artisan make:controller 'Theme\PropertyController'

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\PropertyCategory;

class PropertyController extends Controller
{
    
    protected $limit = 3;

    public function index()
    {

        // $propertyCategories = PropertyCategory::with(['properties' => function($query) //{
        // $query->published();
        // }])->orderBy('title', 'asc')->get();
        // $properties= Property::all();
        // return view("theme.home.index",compact('properties'));
        //}

        // The above code will be useful incase you want to pass and display
        // the categories to the index page but it bad practice as you will be required
        // to it every place you want to pass the category, and if you want to change the // query you will required to change all pelaces, The best way is to use 
        // view composer:
        // Open the terminal and create new ComposerServiceProvider
        // Command: php artisan make:provider ComposerServiceProvider
        // Service provider is the center of initialization process in which all 
        // the relevant and necesary code are loaded here including most essential 
        // laravel framework itself, Here we can register and defing binding,  
        // event listener, middleware, route and much more
        // we going to create custom code and load it here
        // as this method is called after all the service provider has been registered
        // Open ComposerServiceProvider file and define the following code 
        // in the boot method as follows:
        // Public function boot(){
        // view()->composer('layouts.frontend.sidebar', function($view){
        //     $categories = PostCategory::with(['posts' => function($query) {
        //              $query->published();
        //     }])->orderBy('title', 'asc')->get();
        //     return $view->with('categories',$categories);
        // });
        // The composer function require the two parameter first is view you want to pass
        // the data and second is closure function for defining the query:
        // dont forget to register it in config.app then look for 
        // "appliction service provider part"

        // The below code will obtain all the featuredProperties together 
        // with //owner,district,//region,category:(Eager loading) as will 
        // reduce the number of //query to be executed, featured is called scope 
        // will is created on the property //model eg:
        // public function scopeFeatured($query){
        //    return $query->orderBy('created_at','desc');
        // } 
      
        
        $featuredProperties  = Property::with('owner','district','region','category')->featured()->get();
        $lastestProperties   = Property::with('owner','district','region','category')->latest()->get();
        return view("theme.home.index",compact('featuredProperties','lastestProperties'));
        
    }

    
    public function rentProperties()
    {

        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        //:Use ComposerServiceProvider to keep the code well organized, but here
        //just use it anyway.
        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();

        $rentProperties  = Property::with('owner','district','region','category')
                   ->rent()
                   ->latest()
                   ->paginate($this->limit);
        return view("theme.property.rent",compact('rentProperties','propertyCategories'));
        
    }

    public function saleProperties()
    {

    
        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        //:Use ComposerServiceProvider to keep the code well organized, but here
        //just use it anyway.
        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();

        $saleProperties  = Property::with('owner','district','region','category')
                   ->sale()
                   ->paginate($this->limit);
        return view("theme.property.sale",compact('saleProperties','propertyCategories'));
        
    }

    public function propertyDetail(Property $property){

  

        //Use the method below if you want to pass ID as paremeter 
        // but if the the model was injected
        //Then Model Binding will prefered as it can be used to show the slug in the Url
        //Paremeter instead of an id:eg below 
        //public function propertyDetail($id){
        //$property = Property::findorFail($id);
        //return view('theme.home.property_detail', compact('property'));}

        //if the Model binding is used: then first define the getRouteKeyName(){
        // function in the Model or you can use another technique which 
        // not mention here.

        //The below is the increment technique:    
        // increament the view count in the database the clicked link/refreshed 
        // but should ip session for mprovement
        // update posts set view_count = view_count + 1 whare id=? 
        #method 1
        //$viewCount = (int)$post->view_count + 1;
        //$property->update(['view_count' => $viewCount]);

        #method 2:
        (int)$property->increment('view_count');

        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        //:Use ComposerServiceProvider to keep the code well organized, but here
        //just use it anyway.
        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();

        return view('theme.property.property_detail', compact('property','propertyCategories'));
        
        
    }

    public function properties()
    {


        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        //:Use ComposerServiceProvider to keep the code well organized, but here
        // just use it anyway.

        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();
        $properties = Property::with('owner','district','region','category')
        ->latest()
        //->published()
        ->paginate($this->limit);
        return view('theme.property.properties', compact('properties','propertyCategories'));
    }
    

    ////Get all propertied for particular category
    public function propertyCategory(PropertyCategory $category)
    {
         
         $categoryName = $category->title;
         
        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        // :Use ComposerServiceProvider to keep the code well organized, but here
        // just use it anyway.

        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();
         //get all properties by category filter
         $properties =  $category->properties()
                            ->with('owner','district','region','category')
                            ->latest()
                            //->published()
                            ->Paginate($this->limit);

         return view('theme.property.properties', compact('properties','categoryName','propertyCategories' )); 

    }


    //Get all properties for particular owner
    public function propertyOwner(User $owner)
    {
         
        $ownerName = $owner->full_name; 

        // The code below will be useful incase you want to pass and display
        // the categories to the current page
        // But it not good practice as explained above in index function
        //:Use ComposerServiceProvider to keep the code well organized, but here
        // just use it anyway.

        $propertyCategories = PropertyCategory::with(['properties' => function($query) {
                $query->published();
         }])->orderBy('title', 'asc')->get();
         
        //get all properties by user/owner filter
         $properties =  $owner->properties()
                            ->with('owner','district','region','category')
                            ->latest()
                            //->published()
                            ->Paginate($this->limit);

         return view('theme.property.properties', compact('properties','ownerName','propertyCategories' )); 

    }

   
   
}
