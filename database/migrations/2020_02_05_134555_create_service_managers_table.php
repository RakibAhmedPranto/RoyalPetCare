<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('service1_id')->unsigned();
            $table->integer('service2_id')->unsigned();
            $table->integer('service3_id')->unsigned();
            $table->integer('service4_id')->unsigned();
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
        Schema::dropIfExists('service_managers');
    }
}
