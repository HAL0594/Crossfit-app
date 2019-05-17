<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('box', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('in_chage')->nullable();

            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('add_region')->onDelete('cascade');

            $table->string('phone')->nullable();

            $table->integer('box_type_id')->unsigned();
            $table->foreign('box_type_id')->references('id')->on('box_type')->onDelete('cascade');

            $table->string('address')->nullable();
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
        Schema::dropIfExists('box');
    }
}
