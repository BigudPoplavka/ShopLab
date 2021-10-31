<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedals', function (Blueprint $table) {
            $table->integer('code')->autoIncrement();
            $table->string('title')->unique();
            $table->string('firm');
            $table->int('price');
            $table->string('description');
            $table->boolean('is_existing');
            $table->string('image')->uniqid();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pedals', function (Blueprint $table) {
            Schema::dropIfExists('cymbals');
        });
    }
}
