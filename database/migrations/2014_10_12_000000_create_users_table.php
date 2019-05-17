<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('age')->nullable();
            $table->string('status')->nullable();

            $table->integer('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('add_region')->onDelete('cascade');

            $table->string('birthday')->nullable();
            $table->string('country')->nullable();
            $table->string('weight')->nullable();
            $table->string('height')->nullable();

            $table->integer('box_id')->unsigned();
            $table->foreign('box_id')->references('id')->on('box')->onDelete('cascade');

            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('role')->onDelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

            $table->integer('wods_id')->unsigned();
            $table->foreign('wods_id')->references('id')->on('wods')->onDelete('cascade');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
