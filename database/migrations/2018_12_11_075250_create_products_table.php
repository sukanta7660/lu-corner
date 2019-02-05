<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('productID');
            $table->string('title',100);
            $table->mediumText('description');  
            $table->double('price', 9, 2)->nullable(); 
            $table->string('file')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('pending');
            $table->integer('categoryID')->unsigned()->index();
            $table->foreign('categoryID')->references('categoryID')->on('product_categories')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('subcategoryID')->nullable()->unsigned()->index();
            $table->foreign('subcategoryID')->references('subcategoryID')->on('product_subcategories')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('departmentID')->unsigned()->index();
            $table->foreign('departmentID')->references('departmentID')->on('departments')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('userID')->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('products');
    }
}
