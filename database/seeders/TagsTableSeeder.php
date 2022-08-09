<?php

//Command:php artisan make:seeder BlogTagsTableSeeder 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\Blog;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        DB::table('tags')->truncate();

        $travel = new Tag();
        $travel->name = "Travel";
        $travel->slug = "travel";
        $travel->save();

        $wedding = new Tag();
        $wedding->name = "Wedding";
        $wedding->slug = "wedding";
        $wedding->save();

        $restaurant = new Tag();
        $restaurant->name = "Restaurant";
        $restaurant->slug = "restaurant";
        $restaurant->save();

        $food = new Tag();
        $food->name = "Food Dinner";
        $food->slug = "food-dinner";
        $food->save();

        $tags = [
            $travel->id,
            $wedding->id,
            $restaurant->id,
            $food->id
        ];

        foreach (Blog::all() as $blog)
        {
            shuffle($tags);
            
            for ($i = 0; $i < rand(0, count($tags)-1); $i++)
            {
                $blog->tags()->detach($tags[$i]);
                $blog->tags()->attach($tags[$i]);
            }
        }
    }
}
