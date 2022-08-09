<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

/*
|--------------------------------------------------------------------------
| Theme Front End Routes
|--------------------------------------------------------------------------
*/

//Index - homePage
Route::get('/', [
    'uses' => 'App\Http\Controllers\Theme\HomeController@index',
    'as'   => 'index',
]);

//FeaturedProperties
Route::get('/featured', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@featuredProperties',
    'as'   => 'featured',
]);

//LastestProperties
Route::get('/lastest', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@lastestProperties',
    'as'   => 'lastest',
]);

//rentProperties
route::get('/rent', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@rentProperties',
    'as'   => 'rent',
]);

//saleProperties
Route::get('/sale', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@saleProperties',
    'as'   => 'sale',
]);

//cityProperties
Route::get('/city', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@cityProperties',
    'as'   => 'city',
]);

//properties
Route::get('/properties', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@properties',
    'as'   => 'properties'
]); 

        
//propertyDetail
Route::get('/property/{property}', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@propertyDetail',
    'as'   => 'property.detail'
]);
//property by category
Route::get('/category/{category}', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@propertyCategory',
    'as'   => 'property.category'
]);

//property by owner/user
Route::get('/owner/{owner}', [
    'uses' => 'App\Http\Controllers\Theme\PropertyController@propertyOwner',
    'as'   => 'property.owner'
]);  


//Front end blog post
Route::get('/blogs', [
    'uses' => 'App\Http\Controllers\Theme\BlogController@blogs',
    'as' =>'blogs'
 ]); 
//blog detail
Route::get('/blog/{blog}', [
    'uses' => 'App\Http\Controllers\Theme\BlogController@blogDetail',
    'as'   => 'blog.detail'
 ]); 

//blogs by category
 Route::get('/blog_category/{blog_category}', [
   'uses' => 'App\Http\Controllers\Theme\BlogController@blogCategory',
   'as'   => 'blog.category'
   ]); 
//blogs by author
 Route::get('/author/{author}', [
    'uses' => 'App\Http\Controllers\Theme\BlogController@blogAuthor',
    'as'   => 'blog.author'
 ]); 

///blogs by tag
 Route::get('/tag/{tag}', [
    'uses' => 'App\Http\Controllers\Theme\BlogController@blogTag',
    'as'   => 'blog.tag'
]);


 //About 
Route::get('/about', [
    'uses' => 'App\Http\Controllers\Theme\PageController@about',
    'as'   => 'about',
]);

//mission
Route::get('/mission', [
    'uses' => 'App\Http\Controllers\Theme\PageController@mission',
    'as'   => 'mission',
]);

//Team
Route::get('/team', [
    'uses' => 'App\Http\Controllers\Theme\PageControllerr@team',
    'as'   => 'team',
]);

//Contact
Route::get('/contact', [
    'uses' => 'App\Http\Controllers\Theme\PageController@contact',
    'as'   => 'contact',
]);



/*---------------------End of Theme Front End Routes -----------------------*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(
    [ 

    'namespace' => 'App\Http\Controllers\Auth',
    //'middleware' => 'auth', 
    'prefix' => 'admin'], 
    function () {

        //Auth admin users routes
        
        Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
        Route::get('/logout', 'AdminLoginController@adminLogout')->name('admin.logout');

        // Password reset routes
        Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
        Route::post('/password/reset', 'AdminResetPasswordController@reset');
        Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    
});


Route::group(
    [ 

    'namespace' => 'App\Http\Controllers\Admin',
    'middleware' => ['auth:admin'], 
    'prefix' => 'admin',
    ], 
    function () {
    //Dashborads Admin routes
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    Route::get('/blogs', 'BlogController@index')->name('admin.blogs');
    //Route::get('/blog/create', 'BlogController@create')->name('admin.blog.create');
    //Route::get('/blog/edit', 'BlogController@edit')->name('admin.blog.edit');
    //Route::post('/blog/store', 'BlogController@store')->name('admin.blog.store');
    //Route::get('/blog/destroy', 'BlogController@destroy')->name('admin.blog.destroy');
    
    Route::resource('/blog',  'BlogController', 
    ['names' => [
      'index'    => 'admin.blog.index',
      'store'    => 'admin.blog.store',
      'create'   => 'admin.blog.create',
      'update'   => 'admin.blog.update',
      'show'     => 'admin.blog.show',
      'destroy'  => 'admin.blog.destroy',
      'edit'     => 'admin.blog.edit',
    ]]);

    }



);

/*--------------------End of Admin outes--------------------------------*/



Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/users/logout', 'App\Http\Controllers\Auth\LoginController@userLogout')->name('users.logout');
//Route::get('/users/submit-property', 'App\Http\Controllers\HomeController@submitProperty')->name('user.submit-property');
//Route::get('/users/my-properties', 'App\Http\Controllers\HomeController@myProperties')->name('users.my-properties');
//Route::get('/users/my-favorite','App\Http\Controllers\UserPropertyController@userFavorites')->name('users.my-favorites');
