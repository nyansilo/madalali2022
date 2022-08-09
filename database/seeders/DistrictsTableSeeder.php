<?php

//Command:php artisan make:seeder DistrictsTableSeeder

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->truncate();


        DB::table('districts')->insert([
            
        
            ['name'  => "Meru District Council", 'region_id' => 1],
            ['name'  => "Arusha City Council", 'region_id' => 1], 
            ['name'  => "Arusha District Council", 'region_id' => 1], 
            ['name'  => "Karatu District Council", 'region_id' => 1], 
            ['name'  => "Longido District Council", 'region_id' => 1], 
            ['name'  => "Monduli District Council", 'region_id' => 1], 
            ['name'  => "Ngorongoro District Council", 'region_id' => 1],

            ['name'  => "Ilala Municipal Council", 'region_id' => 2], 
            ['name'  => "Kinondoni Municipal Council", 'region_id' => 2], 
            ['name'  => "Temeke Municipal Council", 'region_id' => 2], 
            ['name'  => "Kigamboni Municipal Council", 'region_id' => 2], 
            ['name'  => "Ubungo Municipal Council", 'region_id' => 2],  

            ['name'  => "Bahi District Council", 'region_id' => 3], 
            ['name'  => "Chamwino District Council", 'region_id' => 3], 
            ['name'  => "Chemba District Council", 'region_id' => 3], 
            ['name'  => "Dodoma Municipal Council", 'region_id' => 3], 
            ['name'  => "Kondoa District Council", 'region_id' => 3], 
            ['name'  => "Kongwa District Council", 'region_id' => 3], 
            ['name'  => "Mpwapwa District Council", 'region_id' => 3], 

            ['name'  => "Bukombe District Council", 'region_id' => 4], 
            ['name'  => "Chato District Council", 'region_id' => 4], 
            ['name'  => "Geita Town Council", 'region_id' => 4],
            ['name'  => "Geita District Council", 'region_id' => 4], 
            ['name'  => "Mbogwe District Council", 'region_id' => 4], 
            ['name'  => "Nyanghwale District Council", 'region_id' => 4], 

            ['name'  => "Iringa District Council", 'region_id' => 5], 
            ['name'  => "Iringa Municipal Council", 'region_id' => 5], 
            ['name'  => "Kilolo District Council", 'region_id' => 5], 
            ['name'  => "Mafinga Town Council", 'region_id' => 5],
            ['name'  => "Mufindi District Council", 'region_id' => 5], 

            ['name'  => "Biharamulo District Council", 'region_id' => 6], 
            ['name'  => "Bukoba District Council", 'region_id' => 6], 
            ['name'  => "Bukoba Municipal Council", 'region_id' => 6], 
            ['name'  => "Karagwe District Council", 'region_id' => 6], 
            ['name'  => "Kyerwa District Council", 'region_id' => 6], 
            ['name'  => "Missenyi District Council", 'region_id' => 6], 
            ['name'  => "Muleba District Council", 'region_id' => 6], 
            ['name'  => "Ngara District Council", 'region_id' => 6], 

            ['name'  => "Mlele District Council", 'region_id' => 7], 
            ['name'  => "Mpanda District Council", 'region_id' => 7], 
            ['name'  => "Mpanda Town Council", 'region_id' => 7],

            ['name'  => "Buhigwe District Council", 'region_id' => 8], 
            ['name'  => "Kakonko District Council", 'region_id' => 8], 
            ['name'  => "Kasulu District Council", 'region_id' => 8], 
            ['name'  => "Kasulu Town Council", 'region_id' => 8],
            ['name'  => "Kibondo District Council", 'region_id' => 8], 
            ['name'  => "Kigoma District Council", 'region_id' => 8], 
            ['name'  => "Kigoma-Ujiji Municipal Council", 'region_id' => 8], 
            ['name'  => "Uvinza District Council", 'region_id' => 8], 

            ['name'  => "Hai District Council", 'region_id' => 9], 
            ['name'  => "Moshi District Council", 'region_id' => 9], 
            ['name'  => "Moshi Municipal Council", 'region_id' => 9], 
            ['name'  => "Mwanga District Council", 'region_id' => 9], 
            ['name'  => "Rombo District Council", 'region_id' => 9], 
            ['name'  => "Same District Council", 'region_id' => 9], 
            ['name'  => "Siha District Council", 'region_id' => 9], 

            ['name'  => "Kilwa District Council", 'region_id' => 10], 
            ['name'  => "Lindi District Council", 'region_id' => 10], 
            ['name'  => "Lindi Municipal Council", 'region_id' => 10],
            ['name'  => "Liwale District Council", 'region_id' => 10],
            ['name'  => "Nachingwea District Council", 'region_id' => 10], 
            ['name'  => "Ruangwa District Council", 'region_id' => 10], 

            ['name'  => "Babati Town Council", 'region_id' => 11],
            ['name'  => "Babati District Council", 'region_id' => 11], 
            ['name'  => "Hanang District Council", 'region_id' => 11], 
            ['name'  => "Kiteto District Council", 'region_id' => 11], 
            ['name'  => "Mbulu District Council", 'region_id' => 11], 
            ['name'  => "Simanjiro District Council", 'region_id' => 11], 

            ['name'  => "Bunda District Council", 'region_id' => 12], 
            ['name'  => "Butiama District Council", 'region_id' => 12], 
            ['name'  => "Musoma District Council", 'region_id' => 12], 
            ['name'  => "Musoma Municipal Council", 'region_id' => 12], 
            ['name'  => "Rorya District Council", 'region_id' => 12], 
            ['name'  => "Serengeti District Council", 'region_id' => 12], 
            ['name'  => "Tarime District Council", 'region_id' => 12],  

            ['name'  => "Busokelo District Council", 'region_id' => 13],
            ['name'  => "Chunya District Council", 'region_id' => 13], 
            ['name'  => "Kyela District Council", 'region_id' => 13], 
            ['name'  => "Mbarali District Council", 'region_id' => 13], 
            ['name'  => "Mbeya City Council", 'region_id' => 13], 
            ['name'  => "Mbeya District Council", 'region_id' => 13], 
            ['name'  => "Rungwe District Council", 'region_id' => 13], 

            ['name'  => "Gairo District Council", 'region_id' => 14],
            ['name'  => "Kilombero District Council", 'region_id' => 14], 
            ['name'  => "Kilosa District Council", 'region_id' => 14], 
            ['name'  => "Morogoro District Council", 'region_id' => 14], 
            ['name'  => "Morogoro Municipal Counci", 'region_id' => 14],
            ['name'  => "Mvomero District Council", 'region_id' => 14], 
            ['name'  => "Ulanga District Council", 'region_id' => 14], 
            ['name'  => "Malinyi District Council", 'region_id' => 14], 
            ['name'  => "Ifakara Township Council ", 'region_id' => 14],

            ['name'  => "Masasi District Council", 'region_id' => 15], 
            ['name'  => "Masasi Town Council", 'region_id' => 15], 
            ['name'  => "Mtwara District Council", 'region_id' => 15], 
            ['name'  => "Mtwara Municipal Council", 'region_id' => 15], 
            ['name'  => "Nanyumbu District Council", 'region_id' => 15], 
            ['name'  => "Newala District Council", 'region_id' => 15], 
            ['name'  => "Tandahimba District Council", 'region_id' => 15], 

            ['name'  => "Ilemela Municipal Council", 'region_id' => 16], 
            ['name'  => "Kwimba District Council", 'region_id' => 16], 
            ['name'  => "Magu District Council", 'region_id' => 16], 
            ['name'  => "Misungwi District Council", 'region_id' => 16], 
            ['name'  => "Nyamagana Municipal Council", 'region_id' => 16], 
            ['name'  => "Sengerema District Council", 'region_id' => 16], 
            ['name'  => "Ukerewe District Council", 'region_id' => 16], 

            ['name'  => "Ludewa District Council", 'region_id' => 17], 
            ['name'  => "Makambako Town Council", 'region_id' => 17],
            ['name'  => "Makete District Council", 'region_id' => 17],
            ['name'  => "Njombe District Council", 'region_id' => 17],
            ['name'  => "Njombe Town Council", 'region_id' => 17], 
            ['name'  => "Wangingombe District Council", 'region_id' => 17], 

            ['name'  => "Micheweni", 'region_id' => 18],
            ['name'  => "Wete", 'region_id' => 18],
            ['name'  => "Chake Chake", 'region_id' => 19],
            ['name'  => "Mkoani", 'region_id' => 19],

            ['name'  => "Bagamoyo District Council", 'region_id' => 20], 
            ['name'  => "Kibaha District Council", 'region_id' => 20],
            ['name'  => "Kibaha Town Council", 'region_id' => 20], 
            ['name'  => "Kisarawe District Council", 'region_id' => 20], 
            ['name'  => "Mafia District Council", 'region_id' => 20],
            ['name'  => "Mkuranga District Council", 'region_id' => 20], 
            ['name'  => "Rufiji District Council", 'region_id' => 20], 

            ['name'  => "Kalambo District Council", 'region_id' => 21], 
            ['name'  => "Nkasi District Council", 'region_id' => 21], 
            ['name'  => "Sumbawanga District Council", 'region_id' => 21], 
            ['name'  => "Sumbawanga Municipal Council", 'region_id' => 21], 

            ['name'  => "Mbinga District Council", 'region_id' => 22], 
            ['name'  => "Songea District Council", 'region_id' => 22], 
            ['name'  => "Songea Municipal Council", 'region_id' => 22], 
            ['name'  => "Tunduru District Council", 'region_id' => 22], 
            ['name'  => "Namtumbo District Council", 'region_id' => 22],
            ['name'  => "Nyasa District Council", 'region_id' => 22], 

            ['name'  => "Kahama Town Council", 'region_id' => 23], 
            ['name'  => "Kahama District Council", 'region_id' => 23], 
            ['name'  => "Kishapu District Council", 'region_id' => 23], 
            ['name'  => "Shinyanga District Council", 'region_id' => 23], 
            ['name'  => "Shinyanga Municipal Council", 'region_id' => 23], 

            ['name'  => "Bariadi District Council", 'region_id' => 24], 
            ['name'  => "Busega District Council", 'region_id' => 24], 
            ['name'  => "Itilima District Council", 'region_id' => 24], 
            ['name'  => "Maswa District Council", 'region_id' => 24], 
            ['name'  => "Meatu District Council", 'region_id' => 24], 

            ['name'  => "Ikungi District Council", 'region_id' => 25], 
            ['name'  => "Iramba District Council", 'region_id' => 25], 
            ['name'  => "Manyoni District Council", 'region_id' => 25], 
            ['name'  => "Mkalama District Council", 'region_id' => 25], 
            ['name'  => "Singida District Council", 'region_id' => 25], 
            ['name'  => "Singida Municipal Council", 'region_id' => 25], 

            ['name'  => "Ileje District", 'region_id' => 26],
            ['name'  => "Mbozi District", 'region_id' => 26],
            ['name'  => "Momba District", 'region_id' => 26],
            ['name'  => "Songwe District", 'region_id' => 26],

            ['name'  => "Igunga District Council", 'region_id' => 27], 
            ['name'  => "Kaliua District Council", 'region_id' => 27], 
            ['name'  => "Nzega District Council", 'region_id' => 27], 
            ['name'  => "Sikonge District Council", 'region_id' => 27], 
            ['name'  => "Tabora Municipal Council", 'region_id' => 27], 
            ['name'  => "Urambo District Council1", 'region_id' => 27],
            ['name'  => "Uyui District Council", 'region_id' => 27], 

            ['name'  => "Handeni District Council", 'region_id' => 28], 
            ['name'  => "Handeni Town Council", 'region_id' => 28],
            ['name'  => "Kilindi District Council", 'region_id' => 28], 
            ['name'  => "Korogwe Town Council", 'region_id' => 28],
            ['name'  => "Korogwe District Council", 'region_id' => 28], 
            ['name'  => "Lushoto District Council", 'region_id' => 28],  
            ['name'  => "Muheza District Council", 'region_id' => 28], 
            ['name'  => "Mkinga District Council", 'region_id' => 28], 
            ['name'  => "Pangani District Council", 'region_id' => 28],
            ['name'  => "Tanga City Council", 'region_id' => 28], 

            ['name'  => "Kaskazini A", 'region_id' => 29],
            ['name'  => "Kaskazini B", 'region_id' => 29],

            ['name'  => "Kati District", 'region_id' => 30],
            ['name'  => "Kusini District", 'region_id' => 30],

            ['name'  => "Magharibi", 'region_id' => 31],
            ['name'  => "Mjini", 'region_id' => 31],




            ]);
    }
}
