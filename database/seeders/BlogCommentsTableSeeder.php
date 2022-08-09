<?php

// Command: php artisan make:seeder BlogCommentsTableSeeder 

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\BlogComment;
use Carbon\Carbon;
use Faker\Factory;


class BlogCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker    = Factory::create();
        $comments = [];

        $blogs = Blog::published()->latest()->take(5)->get();
        foreach ($blogs as $blog)
        {
            for ($i = 1; $i <= rand(1, 10); $i++)
            {
                $commentDate = $blog->published_at->modify("+{$i} hours");

                $comments[] = [
                    'author_name' => $faker->name,
                    'author_email' => $faker->email,
                    'author_url' => $faker->domainName,
                    'body' => $faker->paragraphs(rand(1, 5), true),
                    'blog_id' => $blog->id,
                    'created_at' => $commentDate,
                    'updated_at' => $commentDate,
                ];
            }
        }

        BlogComment::truncate();
        BlogComment::insert($comments);
    }
}
