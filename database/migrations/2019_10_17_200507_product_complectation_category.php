<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductComplectationCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_complection_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('complectation_id');
            $table->integer('product_id');
            $table->integer('category_id');
            $table->integer('selected_product_id')->default(0);
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
        Schema::dropIfExists('product_complection_products');
    }
}
