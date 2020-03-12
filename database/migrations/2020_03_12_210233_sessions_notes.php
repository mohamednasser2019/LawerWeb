<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SessionsNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions_notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('note');
            $table->bigInteger('session_Id')->unsigned();
            $table->foreign('session_Id')->references('id')->on('sessions');
            $table->string('updated_by');
            $table->string('status')->default('لا');
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
        Schema::dropIfExists('sessions_notes');
    }
}
