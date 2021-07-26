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
            $table->string('mfg_id',20)->primary();
            $table->string('name',30);
            $table->string('logo',50);
            $table->string('nation',30);
            $table->string('website',50);
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
