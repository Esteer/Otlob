<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rest_cat', function (Blueprint $table) {
            $table->integer('rest_id')->unsigned();
            $table->foreign('rest_id')->references('id')->on('resturants')->onDelete('cascade');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('rest_cat');
    }
}
