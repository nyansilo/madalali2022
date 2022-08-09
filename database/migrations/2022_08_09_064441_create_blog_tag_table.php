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
        Schema::create('blog_tag', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('blog_id')->unsigned();
            $table->integer('tag_id')->unsigned();
            $table->primary(['blog_id', 'tag_id']);
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    
    public function down()
    {
        Schema::dropIfExists('blog_tag');
    }
    
};
