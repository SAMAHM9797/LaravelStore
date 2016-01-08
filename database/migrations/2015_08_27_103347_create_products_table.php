<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('name', 140);
            $table->string('description', 500);
            $table->integer('price');
            $table->integer('categories_id')->unsigned();   
            $table->integer('brand_id')->unsigned();
            $table->string("imgurl",500);
            $table->timestamps();
        });

        Schema::table('products', function ($table) {

              $table->foreign('categories_id')->references('id')->on('categories');
              $table->foreign('brand_id')->references('id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('products');
    }
}
