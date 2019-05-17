<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_region', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('territory')->nullable();
    
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');


   
            $table->string('state');
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
        Schema::dropIfExists('add_region');
    }
}
