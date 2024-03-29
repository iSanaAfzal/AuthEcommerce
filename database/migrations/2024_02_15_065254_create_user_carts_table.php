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
       Schema::create('user_carts', function (Blueprint $table) {
           $table->id();
           $table->binary('Image');
           $table->string('Product_Name')->nullable();
           $table->string('description')->nullable();

           $table->float('price')->nullable();
           $table->decimal('total', 8, 2);
           $table->integer('quantity');
           $table->unsignedBigInteger('product_id');
           $table->unsignedBigInteger('user_id');
           $table->foreign('product_id')->references('id')->on('products');
           $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_carts');
    }
};