<?php

//Command: php artisan make:seeder RegionsTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          //reset the users table
        //DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('regions')->truncate();


        DB::table('regions')->insert([
                
            ['name'  => "Arusha",'image' => "arusha.jpeg"],
            ['name'  => "Dar es Salaam",'image' => "dar_es_salaam.jpeg"],
            ['name'  => "Dodoma",'image' => "dodoma.webp"],
            ['name'  => "Geita",'image' => "geita.jpg"],
            ['name'  => "Iringa",'image' => "iringa.jpg"],
            ['name'  => "Kagera",'image' => "kagera.jpg"],
            ['name'  => "Katavi",'image' => "katavi.jpg"],
            ['name'  => "Kigoma",'image' => "kigoma.jpg"],
            ['name'  => "Kilimanjaro",'image' => "kilimanjaro.webp"],
            ['name'  => "Lindi",'image' => "lindi.jpg"],
            ['name'  => "Manyara",'image' => "manyara.jpg"],
            ['name'  => "Mara",'image' => "mara.jpg"],
            ['name'  => "Mbeya",'image' => "mbeya.jpg"],
            ['name'  => "Morogoro",'image' => "morogoro.jpg"],
            ['name'  => "Mtwara",'image' => "mtwara.jpg"],
            ['name'  => "Mwanza",'image' => "mwanza.jpeg"],
            ['name'  => "Njombe",'image' => "njombe.jpg"],
            ['name'  => "Pemba North",'image' => "pemba_north.jpg"],
            ['name'  => "Pemba South",'image' => "pemba_south.jpg"],
            ['name'  => "Pwani",'image' => "pwani.jpg"],
            ['name'  => "Rukwa",'image' => "rukwa.jpg"],
            ['name'  => "Ruvuma",'image' => "ruvuma.jpg"],
            ['name'  => "Shinyanga",'image' => "shinyanga.jpg"],
            ['name'  => "Simiyu",'image' => "simiyu.jpg"],
            ['name'  => "Singida",'image' => "singida.jpg"],
            ['name'  => "Songwe",'image' => "songwe.jpg"],
            ['name'  => "Tabora",'image' => "tabora.jpg"],
            ['name'  => "Tanga",'image' => "tanga.jpeg"],
            ['name'  => "Zanzibar North",'image' => "zanzibar_north.jpg"],
            ['name'  => "Zanzibar South",'image' => "zanzibar_south.jpg"],
            ['name'  => "Zanzibar West",'image' => "zanzibar_west.jpg"],
           

        ]);
    }
}
