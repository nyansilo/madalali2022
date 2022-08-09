<?php

//Command: php artisan make:seeder PropertyImagesTableSeeder
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

use Faker\Factory as Faker;

class PropertyImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //reset the properties' table
       DB::table('property_Images')->truncate();

        $faker = Faker::create();
        // following line retrieve all the property_ids from DB
        //$properties = Property::all()->pluck('id');
       
        //foreach(range(1,2) as $index){
        //for($i=1; $i <= 10; $i++){
          //  $image = "Propety_Image_".rand(1,6).".jpg";
            //$propertyImage = PropertyImage::create([
              //  'name'        => $faker->name,
                //'image'       => $image,
                //'featured'    => $faker->randomElement(['0' ,'1']),
                //'size'        => $faker->randomElement(['1' ,'2']),
                //'extension'   => $faker->randomElement(['jpg' ,'png']),
                //'property_id' => $faker->randomElement($properties),
            //]);
        //}


         $propertImages = [];
         $properties = Property::all()->pluck('id');
         for($i=1; $i <= 10; $i++){

          $image = "Propety_Image_".rand(1,6).".jpg";

          $propertImages[] =  [

                'name'        => $faker->name,
                'image'       => $image,
                'featured'    => $faker->randomElement(['0' ,'1']),
                'size'        => $faker->randomElement(['1' ,'2']),
                'extension'   => $faker->randomElement(['jpg' ,'png']),
                'property_id' => $faker->randomElement($properties),
               
                
           ];
       }
       DB::table('property_Images')->insert($propertImages);
    }
}