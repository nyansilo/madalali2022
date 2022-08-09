<?php

//Command: php artisan make:seeder PropertySubCaegoriesTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\PropertyCategory;

class PropertySubCategoriesTableSeeder extends Seeder
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

        DB::table('property_sub_categories')->truncate();

        DB::table('property_sub_categories')->insert([
         
            [
                'category_id' => PropertyCategory::where('title', 'Lands')->first()->id,
                'title'       => 'Plot',
                'slug'        => 'plot',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Apartments')->first()->id,
                'title'       => 'House',
                'slug'        => 'house',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Commercials')->first()->id,

                'title'       => 'Office Place',
                'slug'        => 'office-place',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Vehicles')->first()->id,
                'title'       => 'Car',
                'slug'        => 'car',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
          
        ]); 

        DB::table('property_sub_categories')->insert([
         
            [
                'category_id' => PropertyCategory::where('title', 'Lands')->first()->id,
                'title'       => 'Farm',
                'slug'        => 'farm',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Apartments')->first()->id,
                'title'       => 'Room',
                'slug'        => 'room',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Commercials')->first()->id,

                'title'       => 'Frame',
                'slug'        => 'frame',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
            [
                'category_id' => PropertyCategory::where('title', 'Vehicles')->first()->id,
                'title'       => 'Bajaji',
                'slug'        => 'bajaji',
                'created_at'  => $createdDate,
                'updated_at'  => $createdDate,
            ],
          
        ]); 


       
    }
}
