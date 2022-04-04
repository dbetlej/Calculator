<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120)->unique();
            $table->string('url', 500)->nullable();
            $table->string('description', 1200)->nullable();
            $table->string('series', 120)->nullable();
            $table->string('category', 120)->nullable();
            $table->boolean('favorite')->nullable();
            $table->boolean('watched')->nullable();
            $table->boolean('to_watch')->nullable();
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
        Schema::dropIfExists('movies');
    }
};
