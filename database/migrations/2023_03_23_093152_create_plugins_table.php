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
        Schema::create('plugins', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_ph')->default(true);
            $table->string('ph_no')->nullable();
            $table->boolean('is_wh')->default(true);
            $table->string('wh_no')->nullable();
            $table->boolean('is_tw')->default(true);
            $table->string('tw_id')->nullable();
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
        Schema::dropIfExists('plugins');
    }
};
