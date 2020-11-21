<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_product');
            $table->integer('price');
            $table->string('image');
            $table->string('Description');
            $table->timestamps();
        });
        Schema::create('order',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('qty');
            $table->integer('total');
            $table->timestamps();
        });
        Schema::create('detail',function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->integer('qty');
            $table->integer('total');
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
        //
    }
}
