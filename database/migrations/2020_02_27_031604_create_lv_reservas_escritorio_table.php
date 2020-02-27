<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLvReservasEscritorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lv_reservas_escritorio', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nome', 80)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('tel', 12)->nullable();
            $table->string('cel', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lv_reservas_escritorio');
    }
}
