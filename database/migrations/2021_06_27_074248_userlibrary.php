<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Userlibrary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userlibrary', function (Blueprint $table) {
            $table->string('email');
            $table->string('isbn');
            $table->foreign('email')->references('email')->on('userlogin');
            $table->foreign('isbn')->references('isbn')->on('masterlibrary');
            $table->primary(['email', 'isbn']);
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
        Schema::dropIfExists('userlibrary');
    }
}
