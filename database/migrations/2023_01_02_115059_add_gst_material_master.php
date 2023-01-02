<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGstMaterialMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn("material_master", "rate")) //check the column
    {
        Schema::table("material_master", function (Blueprint $table)
        {
            $table->dropColumn("rate"); //drop it
            $table->string("GST")->default('0');
        });
    }

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
