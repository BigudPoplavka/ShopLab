<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCymbalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cymbals', function (Blueprint $table) {
        $table->id('code');
        $table->string('title')->unique();
        $table->string('firm');
        $table->int('size');
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
        Schema::dropIfExists('cymbals');
    }
}
