<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('cid');
            $table->string('identifier');
            $table->integer('slot');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('gender');
            $table->string('dob');
            $table->integer('height');
            $table->integer('cash');
            $table->integer('bank');
            $table->string('job')->nullable();
            $table->text('story');

            // Json data values.
            $table->json('basicneeds');
            $table->json('licenses');
            $table->json('model');
            $table->json('tattoos');
            $table->json('ammo');
            $table->json('animations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
