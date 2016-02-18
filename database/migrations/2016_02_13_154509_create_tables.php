<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('division', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('ship', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('slots');
            $table->integer('division_id')->unsigned()->nullable();
            $table->foreign('division_id')->references('id')->on('division');
            $table->timestamps();
        });
        Schema::create('team', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('division_id')->unsigned()->nullable();
            $table->integer('ship_id')->unsigned()->nullable();
            $table->foreign('division_id')->references('id')->on('division');
            $table->foreign('ship_id')->references('id')->on('ship');
            $table->timestamps();
        });
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('division_id')->unsigned()->nullable();
            $table->integer('ship_id')->unsigned()->nullable();
            $table->integer('team_id')->unsigned()->nullable();
            $table->foreign('team_id')->references('id')->on('team');
            $table->foreign('division_id')->references('id')->on('division');
            $table->foreign('ship_id')->references('id')->on('ship');
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
        //
    }
}
