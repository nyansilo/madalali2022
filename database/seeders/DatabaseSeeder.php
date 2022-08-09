<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([

            AdminsTableSeeder::class,
            UsersTableSeeder::class,
            PropertiesTableSeeder::class,
            PropertyImagesTableSeeder::class,
            PropertyCategoriesTableSeeder::class,
            PropertySubCategoriesTableSeeder::class,
            RegionsTableSeeder::class,
            DistrictsTableSeeder::class,
            BlogsTableSeeder::class,
            BlogCategoriesTableSeeder::class,
            TagsTableSeeder::class,
            BlogCommentsTableSeeder::class,       
       ]);

       
    }
}




