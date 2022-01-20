<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Masterlibrary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterlibrary', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->unique();
            $table->string('title');
            $table->string('genre');
            $table->string('coverpage');
            $table->string('bookcontents');
            $table->string('description');
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
        Schema::dropIfExists('masterlibrary');
    }
}
