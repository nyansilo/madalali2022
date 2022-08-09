<?php

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

        Schema::create('tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        /**
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('blog_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['blog_id', 'tag_id']);
        });

        */
     

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::drop('blog_tag');
        Schema::drop('tags');
    }
};
