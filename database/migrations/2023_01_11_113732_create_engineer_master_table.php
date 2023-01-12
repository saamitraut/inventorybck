<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEngineerMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineer_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accessid'); 
            $table->string('EngineerName'); 
            $table->string('Mobile'); 
            $table->string('Email'); 
            $table->string('Designation'); 
            $table->boolean('status');
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
        Schema::dropIfExists('engineer_master');
    }
}
