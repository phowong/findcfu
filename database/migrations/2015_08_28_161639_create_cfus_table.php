<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('intro', 255);//intro for profile
            $table->string('workingHR', 255);   //use bitstring to store working hours
            $table->string('propic', 255); // use storage
            $table->string('user_id');
            //$table->integer('rating');
            //$table->integer('rated');
            //$table->integer('ref');
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
        Schema::drop('cfus');
    }
}
