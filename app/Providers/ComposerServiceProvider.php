<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//use App\Views\Composers\NavigationComposer;
//use App\Views\Composers\HomeComposer;
//use App\Model\PostCategory;
//use App\Model\Post;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //First alternative
       //Second altertive is better it reduce the complexity
        // view()->composer('layouts.frontend.sidebar', function($view){

        //     $categories = PostCategory::with(['posts' => function($query) {
        //              $query->published();
        //     }])->orderBy('title', 'asc')->get();
        //     return $view->with('categories',$categories);
        // });


        // view()->composer('layouts.frontend.sidebar', function($view){

        //     $popularPosts = Post::published()->popular()->take(3)->get();
        
        //     return $view->with('popularPosts', $popularPosts);

        // }); 

       //second alternative
        //view()->composer('layouts.frontend.sidebar', NavigationComposer::class);

        //view()->composer('theme.index', HomeComposer::class);
    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
