<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sec__a_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('discription');
            $table->string('item1_title');
            $table->string('item1_discription');
            $table->string('item1_image');
            $table->string('item2_title');
            $table->string('item2_discription');
            $table->string('item2_image');
            $table->string('item3_title');
            $table->string('item3_discription');
            $table->string('item3_image');
            $table->string('item4_title');
            $table->string('item4_discription');
            $table->string('item4_image');
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
        Schema::dropIfExists('sec__a_s');
    }
}
