<?php

namespace Database\Seeders;

//Command: php artisan make:seeder PropertyCategoriesTableSeeder

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PropertyCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $date  = Carbon::create(2022, 5, 5, 9);
        $date ->addDays(1);
        $createdDate = clone($date);

        DB::table('property_categories')->truncate();

        DB::table('property_categories')->insert([

            [
                'title'       => 'Apartments',
                'slug'        => 'apartments',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
         
            [
                'title'       => 'Lands',
                'slug'        => 'lands',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],

            [
                'title'       => 'Commercials',
                'slug'        => 'commercials',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'title'       => 'Vehicles',
                'slug'        => 'vehicles',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
          
        ]); 


        //Updates the  property data

        for ($property_id = 1; $property_id <= 10; $property_id++)
        {
            $category_id = rand(1, 4);
            $subcategory_id = rand(1, 2);

            DB::table('properties')
                ->where('id', $property_id)
                ->update(
                    [
                        'category_id' => $category_id,
                        'subcategory_id' => $subcategory_id
                    ]
                );
        }
    }
}
