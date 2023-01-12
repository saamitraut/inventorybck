<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmsViewSubscribersTable extends Migration
{
    public function up()
    {
        Schema::create('sms_view_subscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerid')->nullable(); 
			 $table->string('SubscriberName')->nullable();
			 $table->string('MobileNo')->nullable();
			 $table->string('Area')->nullable();
			 $table->string('Address')->nullable();
			 $table->boolean('status')->nullable();
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
        Schema::dropIfExists('sms_view_subscribers');
    }
}
