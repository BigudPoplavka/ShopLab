<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSticksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sticks', function (Blueprint $table) {
            $table->id('code');
            $table->string('title')->unique();
            $table->string('firm');
            $table->string('size');
            $table->integer('price');
            $table->string('description');
            $table->boolean('is_existing');
            $table->string('image')->uniqid();
            $table->boolean('is_added');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Sticks');
    }
}
