<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTransportationInwardMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("inward_master", function (Blueprint $table)
        {
<<<<<<< HEAD
            $table->string("transportation")->default(0)->change();
=======
            $table->string("transportation")->default(0);
>>>>>>> 0984e194264a39fca45aeb0ddfba7ef9a27783e1
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
