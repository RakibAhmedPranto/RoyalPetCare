<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetCountersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_counters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('discription');
            $table->integer('counter1');
            $table->integer('counter2');
            $table->integer('counter3');
            $table->integer('counter4');
            $table->string('image');
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
        Schema::dropIfExists('pet_counters');
    }
}
