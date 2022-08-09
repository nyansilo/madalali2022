<?php

//Command: php artisan make:controller 'Theme\HomeController'

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Region;
use App\Models\PropertyCategory;

class HomeController extends Controller
{
    

    public function index()
    {

        // This will be useful incase you want to pass and display
        // the categories to the index page
        // $propertyCategories = PropertyCategory::with(['properties' => function($query) {
        // $query->published();
        // }])->orderBy('title', 'asc')->get();
        // $properties= Property::all();
        // return view("theme.home.index",compact('properties'));

        //This will obtain all the latestProperties together with //owner,district,//region,category:(Eager loading) as will reduce the number of //query to be executed, featured is called scope will is created on the property //model eg:

        //public function scopeFeatured($query){
        //    return $query->orderBy('created_at','desc');
        //}

        
        
        $featuredProperties  = Property::with('owner','district','region','category')->featured()->get();

        $latestProperties   = Property::with('owner','district','region','category')->latest()->get();
        
        $cityProperties      = Region::with('properties')->city()->get();
        //$cityProperties    = Region::with(['properties' => function($query) {
        //       $query->city();
        //}])->get();
        return view("theme.home.index",compact('featuredProperties','latestProperties','cityProperties',));
        
    }

    
}
