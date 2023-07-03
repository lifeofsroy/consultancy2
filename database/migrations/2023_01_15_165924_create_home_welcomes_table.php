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
        Schema::create('home_welcomes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->longText('desc')->nullable();
            $table->string('image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('icon1')->nullable();
            $table->string('title1')->nullable();
            $table->string('text1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('title2')->nullable();
            $table->string('text2')->nullable();
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
        Schema::dropIfExists('home_welcomes');
    }
};
