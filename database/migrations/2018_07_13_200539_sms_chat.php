<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SmsChat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smsChat', function (Blueprint $table) {
            $table->increments('unique_id_sms');
            $table->string('user_send');
            $table->string('destination');
            $table->string('content');
            $table->char('date_send');
        });//
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smsChat');
    }
}
