<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    public function index()
    {
        //return view('home');
        return view('users.dashboard.index');
    }

    /**
    public function submitProperty()
    {
        return view('theme.users.submit_property');
    }
    public function myProperties(Request $request)
    {
        $properties  = $request->user()->properties()->with('category', 'owner')->latest()->paginate(5);
        return view('theme.users.properties',compact('properties'));
    }
    */
}
