<?php


//Command: php artisan make:controller 'Theme\AdminController'
namespace App\Http\Controllers\Admin;


use App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests\AdminAccountUpdateRequest;

class AdminController  extends BackendController 
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.administrator.dashboard');
    }

    public function editAccount(Request $request)
    {
        $admin = $request->user();

        return view('admin.administrator.edit_account', compact('admin'));
    }


    public function updateAccount(AdminAccountUpdateRequest $request)
    {
        $admin = $request->user();
        $admin->name = $request->get('name');
        $admin->slug = $request->get('slug');
        $admin->email = $request->get('email');
        $admin->bio = $request->get('bio');
        if(!empty($request->get('password'))) {
        $admin->password = bcrypt($request->get('password'));
        }
        $admin->update();

        return redirect()->back()->with("message", "Account was update successfully!");
    }
}
