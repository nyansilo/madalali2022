<?php

// Command:php artisan make:seeder BlogCategoriesTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use App\Models\Blog;


class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
         DB::table('blog_categories')->truncate();

         DB::table('blog_categories')->insert([

            [
                'title' => 'Uncategorized',
                'slug' => 'uncategorized'
            ],
            [
                'title' => 'Food & Drinks',
                'slug'  => 'food-and-drink'
            ],
            [
                'title' => 'Gardening',
                'slug'  => 'gardening'
            ],
            [
                'title' => 'Personal',
                'slug'  => 'personal'
            ],
            [
                'title' => 'Recipes', 
                'slug'  => 'recipes'
            ],
            [
                'title' => 'Events',
                'slug'  => 'events'
            ],
        ]);

          //$blogs = Blog::all()->pluck('id');


         //Updates the  blog data

        //for ($blog_id = 1; $blog_id <= count($blogs)-1; $blog_id++)
        for ($blog_id = 1; $blog_id <= 30; $blog_id++)    
        {
            $category_id = rand(1, 6);

            DB::table('blogs')
                ->where('id', $blog_id)
                ->update(['category_id' => $category_id]);
        }
    }
}
