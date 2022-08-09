<?php


 //Command: php artisan make:migration create_properties_table
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
        Schema::create('properties', function (Blueprint $table) {


            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('property_code')->nullable();
            $table->text('description');

            $table->unsignedBigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('property_categories')->onDelete('cascade');
            $table->unsignedBigInteger('subcategory_id')->unsigned()->nullable();
            $table->foreign('subcategory_id')->references('id')->on('property_sub_categories')->onDelete('cascade');


            $table->integer('brand_id')->nullable();
            $table->enum('type', ['Sale', 'Rent'])->nullable();
            $table->enum('condition', ['New', 'Used'])->nullable();
            $table->decimal('price', 12,2)->nullable();
            $table->string('discount_price')->nullable();
            $table->enum('is_negotiable', [1,0]);
            $table->enum('is_featured', [1,0])->comment('1 : Featured, 0 : NotFeatured');
            $table->unsignedInteger('region_id')->unsigned()->nullable();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->unsignedInteger('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('hot_deal')->nullable();
            $table->integer('best_rated')->nullable();
            $table->integer('trend')->nullable();
            

            $table->integer('area')->nullable();
            $table->integer('room')->nullable();
            $table->string('sitting_room')->nullable();
            $table->integer('bed')->nullable();
            $table->integer('bath')->nullable();
            $table->String('zip_code')->nullable();

            $table->string('brand')->nullable();
            $table->string('model_type')->nullable();
            $table->enum('driving_type',['Automatic', 'Manual'])->nullable();  
            $table->integer('engine_capacity')->nullable();
            $table->integer('coverage')->nullable();
            $table->enum('fuel_type',['Diesel', 'Petrol','Electricity','Gas'])->nullable();  
            $table->String('color')->nullable();


            $table->integer('view_count')->default('0');

            //0 =pending for review, 1= published, 2=blocked, 3=archived
            $table->enum('status', [0,1,2,3])->nullable();
            $table->enum('price_plan', ['regular','premium'])->nullable();
            $table->enum('mark_as_urgent', ['0','1'])->nullable();

            $table->integer('view')->nullable();
            $table->integer('max_impression')->nullable();
            $table->unsignedInteger('owner_id')->unsigned()->nullable();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('properties');
    }
};
