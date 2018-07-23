<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfoForRegisrtr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
            Schema::create('user_info_for_reg', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->char('familia');
            $table->char('otchestvo');
            $table->char('email');
            $table->char('phone');
            
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info_for_reg');
    }
}
