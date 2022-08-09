<?php

//Command: php artisan make:seeder PropertiesTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Carbon\Carbon;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



 
   // This function will return
   // A random string of specified length
   public function random_strings($length_of_string) {
    
       // random_bytes returns number of bytes
       // bin2hex converts them into hexadecimal format
       return substr(bin2hex(random_bytes($length_of_string)),
                                         0, $length_of_string);
   }
    


    public function run()
    {

      
       //reset the properties' table
       DB::table('properties')->truncate();

       //generate 10 dummy properties data
      
       $properties = [];
       $faker = Factory::create();
       $date  = Carbon::create(2022, 5, 5, 9);
       //$region_id = rand(1,31);

       for($i=1; $i <= 10; $i++){

        //$image1 = "Propety_Image_".rand(1,5).".jpg";
    
        $date ->addDays(1);
        $createdDate = clone($date);

           $properties[] = [
               'owner_id'          => rand(1,3),
               'region_id'         => rand(1,31),
               'district_id'       => rand(1,15),
               'property_code'     => $this->random_strings(6),
               'title'             => $faker->sentence(rand(8,12)),
               'description'       => $faker->paragraphs(rand(10,15),true),
               'slug'              => $faker->slug(),
               'type'              => $faker->randomElement(['Rent' ,'Sale']),
               'condition'         => $faker->randomElement(['Used' ,'New']),
               'price'             => $faker->randomFloat(2, 1000, 10000),
               'is_negotiable'     => $faker->randomElement(['0' ,'1']),
               'is_featured'       => $faker->randomElement(['1' ,'0']),

               'area'              => $faker->randomElement(['2' ,'20']),
               'bed'               => $faker->randomElement(['1' ,'4']),
               'bath'              => $faker->randomElement(['1' ,'4']),
               'sitting_room'      => $faker->randomElement(['1' ,'2']),
              

               'brand'             => $faker->randomElement(['Toyota' ,'Nissan', 'Range', 'Hyundai', 'Mistubishi']),
               
               'driving_type'      => $faker->randomElement(['Automatic' ,'Manual']),
               'engine_capacity'   => $faker->randomElement(['900','1000' ,'1200','1500']),
               'coverage'          => $faker->randomElement(['900','1000' ,'1200','1500']),
               'fuel_type'         => $faker->randomElement(['Diesel', 'Petrol','Electricity','Gas']),
               'color'             => $faker->randomElement(['Red', 'Black','Silver','White']),

               'address'           => $faker->address,
               'lat'               => $faker->latitude($min = -90, $max = 90),
               'lng'               => $faker->longitude($min = -180, $max = 180),
               'status'            => $faker->randomElement(['0' ,'1','2' ,'3']),
               'price_plan'        => $faker->randomElement(['regular','premium']),
               'mark_as_urgent'    => $faker->randomElement(['0' ,'1']),
               'created_at'        => $createdDate,
               'updated_at'        => $createdDate,
               'view'              => rand(1,10)*10
              
               
           ];
       }
       DB::table('properties')->insert($properties);
    }
}
