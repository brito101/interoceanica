<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRastHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('A_Rast_House', function (Blueprint $table) {
            $table->integer('Ra_CodHouse');
            $table->integer('Ra_CodMaster');
            $table->string('Ra_ExpImp', 50);
            $table->string('Ra_RefMaster', 50);
            $table->string('Ra_RefHouse', 50);
            $table->string('Ra_MAWB', 50);
            $table->string('Ra_HAWB', 50);
            $table->string('Ra_CiaAerea', 50);
            $table->string('Ra_OriCid', 50);
            $table->string('Ra_OriAero', 50);
            $table->string('Ra_DesCid', 200);
            $table->string('Ra_DesAero', 50);
            $table->string('Ra_FinalDest', 50);
            $table->dateTime('Ra_PrevSaida');
            $table->dateTime('Ra_Saida');
            $table->dateTime('Ra_Chegada');
            $table->dateTime('Ra_PrevEntreDest');
            $table->dateTime('Ra_EntregaDest');
            $table->string('Ra_Shipper', 150);
            $table->string('Ra_Cnee', 150);
            $table->string('Re_Notify', 150);
            $table->string('Ra_ClienteNome', 150);
            $table->string('Ra_ClienteRef', 150);
            $table->integer('Ra_ClienteCod');
            $table->string('Ra_Incoterm', 50);
            $table->integer('Ra_Volume');
            $table->float('Ra_PesoBruto');
            $table->float('Ra_Cubado');
            $table->float('Ra_Taxavel');
            $table->string('Ra_Login', 50);
            $table->string('Ra_Senha', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rast_houses');
    }
}
