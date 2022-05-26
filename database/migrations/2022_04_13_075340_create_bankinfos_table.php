<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankinfos', function (Blueprint $table) {
            $table->id();
            $table->string('acccount_name')->nullable();
            $table->string('account_no')->nullable();
            $table->string('transaction_no')->nullable();
            $table->string('transaction_date')->nullable();
            $table->string('amount')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('bankinfos');
    }
}
