<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFGCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_car_mfg', function (Blueprint $table) {
            $table->id();
            $table->string('mfg_id')->nullable();
            $table->string('name')->nullable();
            $table->string('logo')->nullable();
            $table->string('nation')->nullable();
            $table->string('website')->nullable();
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
        Schema::dropIfExists('tb_car_mfg');
    }
}
