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
            $table->bigIncrements('type_id')->primary();
            $table->string('mfg_id',20);
            $table->String('model',50);
            $table->integer('suggest_price',11);
            $table->tinyInteger('fuel_type',4);
            $table->tinyInteger('seatnum',11);
            $table->String('car_style',20);
            $table->foreign('mfg_id')->references('mfg_id')->on('tb_car_mfg')->onUpdate('cascade');
            $table->timestamps();
        });
        // Schema::table('tb_car_type', function ($table) {
            
        //     $table->foreign('FK_mfg_id_car_type')->references('mgf_id')->on('tb_mfg_car')->onDelete('cascade');
        // });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {    
        // Schema::enableForeignKeyConstraints();
        Schema::disableForeignKeyConstraints();
         Schema::table('tb_car_type', function(Blueprint $table){
             $table->dropIfExists(['mfg_id']);
         });
         Schema::dropIfExists('tb_car_type');
        //  Schema::disableForeignKeyConstraints();
         Schema::enableForeignKeyConstraints();
        
    }
}