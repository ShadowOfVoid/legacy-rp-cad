<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters_cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cid');
            $table->string('name');
            $table->string('plate');
            $table->string('hash');
            $table->string('garage');
            $table->string('state');
            $table->float('fuel');
            $table->boolean('supporter');
            $table->json('damage');
            $table->json('modifications');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters_cars');
    }
}
