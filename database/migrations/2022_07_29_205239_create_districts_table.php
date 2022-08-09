<?php

//Command: php artisan make:migration create_districts_table
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('districts', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->unsignedInteger('region_id')->unsigned()->nullable(); 
            $table->foreign('region_id')->references('id')->on('regions') ;  
            $table->string('name');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
};
