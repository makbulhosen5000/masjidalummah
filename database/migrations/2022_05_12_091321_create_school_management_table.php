<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_management', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('first_day_fall')->nullable();
            $table->string('first_day_spring')->nullable();
            $table->string('late_registration_fall')->nullable();
            $table->string('late_registration_spring')->nullable();
            $table->string('last_day_fall')->nullable();
            $table->string('last_day_spring')->nullable();
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
        Schema::dropIfExists('school_management');
    }
}
