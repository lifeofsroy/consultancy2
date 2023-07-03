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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('thumb')->nullable();
            $table->string('image')->nullable();
            $table->string('short')->nullable();
            $table->string('location')->nullable();
            $table->string('type')->nullable();
            $table->string('contact')->nullable();
            $table->string('doc')->nullable();
            $table->longText('desc')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('featured')->default(false);
            $table->string('meta_title')->nullable();
            $table->string('meta_desc')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
};
