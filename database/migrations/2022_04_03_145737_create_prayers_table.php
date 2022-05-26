<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->string('short_title')->nullable();
            $table->string('long_title')->nullable();
            $table->string('date')->nullable();
            $table->string('jummah')->nullable();
            $table->string('fajr')->nullable();
            $table->string('sunrise')->nullable();
            $table->string('dhuhr')->nullable();
            $table->string('asr')->nullable();
            $table->string('sunset')->nullable();
            $table->string('maghrib')->nullable();
            $table->string('ishaa')->nullable();
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
        Schema::dropIfExists('prayers');
    }
}
