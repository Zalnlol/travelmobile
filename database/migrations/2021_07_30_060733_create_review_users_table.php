<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_users', function (Blueprint $table) {
            $table->id();
            $table->Integer('user_id')->unsigned();
            $table->Integer('review_id')->unsigned();
            $table->timestamps();
            $table->foreign('user_id')->references('user_id')->on('tb_user');
            $table->foregin('review_id')->references('id')->on('tb_review');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_users');
    }
}
