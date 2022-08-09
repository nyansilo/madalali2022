<?php

//Command: php artisan make:controller 'Theme\PageController'

namespace App\Http\Controllers\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('theme.about.about');
    }
    public function contact(){
        return view('theme.contact.contact');
    }
    public function mission(){
        return view('theme.mission.mission');
    }
    public function team(){
        return view('theme.team.team');
    }
    public function contact(){
        return view('theme.contact.contact');
    }
}
