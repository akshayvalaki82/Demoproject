<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributesAssocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__attributes__assocs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('product_attribute_id')->unsigned();
            $table->foreign('product_attribute_id')->references("id")->on("product_attributes")->onDelete("cascade");
            $table->integer('product_attribute_value_id')->unsigned();
            $table->foreign('product_attribute_value_id')->references("id")->on("product__attribute__values")->onDelete("cascade");
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
        Schema::dropIfExists('product__attributes__assocs');
    }
}
