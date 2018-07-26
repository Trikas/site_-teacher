<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('lesson', function (Blueprint $table) {
            $table->increments('id');   
            $table->text('content');
            $table->string('author');
            $table->string('title1');
            $table->string('title2');
            $table->string('name_lesson');
            $table->char('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('lesson');
    }
}
