<?php

////Command: php artisan make:seeder AdminsTableSeeder

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('admins')->truncate();

        //generate 3 users/author
        $faker = Factory::create();

        DB::table('admins')->insert([
            [
                'user_name'    => "daniel",
                'first_name'    => "Daniel",
                'last_name'    => "George",
                'slug'    => "daniel-george",
                'job_title'    => "Enginer",
                'email'   => "daniel@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),


            ],
            [
                'user_name'    => "joseph",
                'first_name'    => "Josepth",
                'last_name'    => "Lukindo",
                'slug'    => "joseph-lukindo",
                'job_title'    => "Enginer",
                'email'   => "joseph@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),
            ],
            [
                'user_name'    => "baraka",
                'first_name'    => "baraka",
                'last_name'    => "Muvara",
                'slug'    => "baraka-muvara",
                'job_title'    => "Enginer",
                'email'   => "baraka@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),
            ],

        ]);
    }
}
