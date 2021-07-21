<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_car_type', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('type_id')->nullable();
            $table->String('mgf_id')->nullable();
            $table->String('model')->nullable();
            $table->integer('suggest_price')->nullable();
            $table->integer('fuel_type')->nullable();
            $table->integer('seatnum')->nullable();
            $table->String('car_style')->nullable();
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
        Schema::dropIfExists('tb_car_type');
    }
}
