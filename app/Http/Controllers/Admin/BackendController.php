<?php


//Command: php artisan make:controller 'Admin\BackendController'
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admins');
        //$this->middleware('check-permissions');
    }
}
