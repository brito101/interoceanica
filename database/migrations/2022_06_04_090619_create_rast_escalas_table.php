<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRastEscalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('A_Rast_Escala', function (Blueprint $table) {
            $table->integer('Re_Codigo');
            $table->integer('Re_CodMaster');
            $table->string('Re_Aeroporto', 50);
            $table->string('Re_Flight', 50);
            $table->dateTime('Re_Data');
            $table->dateTime('Re_Hora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rast_escalas');
    }
}
