<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateInOrder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate_in_order';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This method migrate tables in order';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /** Specify the names of the migrations files in the order you want to 
        * loaded
        * $migrations =[ 
        *               'xxxx_xx_xx_000000_create_nameTable_table.php',
        *    ];
        */
        $migrations = [ 
            '2014_10_12_000000_create_users_table.php',
            '2014_10_12_100000_create_password_resets_table.php',
            '2019_08_19_000000_create_failed_jobs_table.php',
            '2019_12_14_000001_create_personal_access_tokens_table.php',
            '2022_07_26_203819_create_admins_table.php',
            '2022_07_29_095958_create_regions_table.php',
            '2022_07_29_205239_create_districts_table.php',
            '2022_07_29_210556_create_property_categories_table.php',
            '2022_07_29_210710_create_property_sub_categories_table.php',
            '2022_07_29_211101_create_properties_table.php',
            '2022_07_29_212354_create_property_images_table.php',
        ];

        foreach($migrations as $migration)
        {
           $basePath = 'database/migrations/';          
           $migrationName = trim($migration);
           $path = $basePath.$migrationName;
           $this->call('migrate:fresh', [
            '--path' => $path ,            
           ]);
        }
    }
}
