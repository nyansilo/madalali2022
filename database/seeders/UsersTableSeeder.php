<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UsersTableSeeder extends Seeder
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
        DB::table('users')->truncate();

        //generate 3 users/author
        $faker = Factory::create();

        DB::table('users')->insert([
            [
                'user_name'    => "john",
                'first_name'    => "John",
                'last_name'    => "Doe",
                'slug'    => "john-doe",
                'email'   => "johndoe@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),


            ],
            [
                'user_name'    => "jane",
                'first_name'    => "Jane",
                'last_name'    => "Doe",
                'slug'    => "jane-doe",
                'email'   => "janedoe@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),
            ],
            [
                'user_name'    => "edo",
                'first_name'    => "Edo",
                'last_name'    => "Masaru",
                'slug'    => "edo-masaru",
                'email'   => "edo@test.com",
                'password'=> bcrypt('secret'),
                'bio'    => $faker->text(rand(250,300)),
                'created_at' => Carbon::now(),
                'Updated_at' => Carbon::now(),
            ],

        ]);
    }
}

