<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class Migrations extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->nullable();
            $table->string('description')->nullable();

            $table->timestamps();
        });

        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');

            $table->integer('author_id')->unsigned()->index();
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->mediumText('content')->nullable();

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
        Schema::drop('post');
        Schema::drop('category');
        Schema::drop('users');
    }
}
