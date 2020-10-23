<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ref_no');
            $table->string('make');
            $table->string('model');
            $table->string('version');
            $table->string('color_ext');
            $table->string('color_int');
            $table->string('car_type');
            $table->string('engine_cc');
            $table->string('transmission');
            $table->string('chassis_type');
            $table->string('doors');
            $table->string('seats');
            $table->string('mileages');
            $table->string('registration_import');
            $table->string('availability');
            $table->string('image');
            $table->string('features');
            $table->integer('cat_id');
            $table->integer('pro_img_id');
            $table->boolean('is_fresh_arrival');
            $table->boolean('is_featured_stock');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
