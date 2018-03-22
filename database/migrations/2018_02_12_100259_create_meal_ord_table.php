<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealOrdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_ord', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('order_id')->unsigned();
            
                $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
                $table->integer('meal_id')->unsigned();
                
             $table->foreign('meal_id')->references('id')->on('meals')->onDelete('cascade');
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
        Schema::dropIfExists('meal_ord');
    }
}
