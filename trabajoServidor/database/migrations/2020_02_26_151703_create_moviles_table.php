<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('marca');
            $table->integer('rom');
            $table->integer('ram');
            $table->integer('bateria');
            $table->decimal('precio',7,2);
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
        Schema::dropIfExists('movils');
    }
}