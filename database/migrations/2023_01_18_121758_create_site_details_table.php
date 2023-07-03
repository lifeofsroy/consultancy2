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
        Schema::create('site_details', function (Blueprint $table) {
            $table->id();
            $table->string('site_title')->nullable();
            $table->text('site_desc')->nullable();
            $table->string('site_keys')->nullable();
            $table->string('title_color')->nullable();
            $table->string('button_color')->nullable();
            $table->string('active_color')->nullable();
            $table->string('beard_color')->nullable();
            $table->string('icon_color')->nullable();
            $table->string('tab_color')->nullable();
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
        Schema::dropIfExists('site_details');
    }
};
