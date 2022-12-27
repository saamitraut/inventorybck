<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInwardMasterTable extends Migration
{
    public function up()
    {
        Schema::create('inward_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_id')->nullable(); 
            $table->string('material_description')->nullable(); 
            $table->string('supplier')->nullable();
            // $table->string('unit')->nullable(); 

            $table->string('opening_stock')->nullable();
            $table->string('received')->nullable(); 
            $table->string('return')->nullable(); 
            $table->string('closing_stock')->nullable();
            $table->string('reorder')->nullable(); 
            
            $table->string('rate')->nullable(); 
            $table->string('amount')->nullable(); 
            $table->date('receivedon')->nullable(); 
            $table->string('status')->default('1');
            $table->string('image');
            $table->string('receiptno')->nullable()->unique();            
            
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inward_master');
    }
}
