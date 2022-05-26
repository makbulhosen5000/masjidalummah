<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('age')->nullable();
            $table->string('title')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('family_name')->nullable();
            $table->string('num_street_name')->nullable();
            $table->string('suburb')->nullable();
            $table->string('state')->nullable();
            $table->string('post_code')->nullable();
            $table->string('email')->nullable();
            $table->string('home_phone_num')->nullable();
            $table->string('mobile_phone_num')->nullable();
            $table->string('work_phone_num')->nullable();
            $table->string('applicant_signature')->nullable();
            $table->string('applicant_date')->nullablenullable();;
            $table->string('nominator_full_name')->nullable();
            $table->string('nominator_membership_no')->nullable();
            $table->string('nominator_signature')->nullable();
            $table->string('nominator_date')->nullable();
            $table->string('seconder_full_name')->nullable();
            $table->string('seconder_membership_no')->nullable();
            $table->string('seconder_signature')->nullable();
            $table->string('seconder_date')->nullable();
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
        Schema::dropIfExists('donates');
    }
}
