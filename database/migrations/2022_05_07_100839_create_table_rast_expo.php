<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRastExpo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Rast_Expo', function (Blueprint $table) {
            $table->integer('Ex_ReservaCod');
            $table->string('Ex_ReservaNr', 50);
            $table->string('Ex_BLNr', 50);
            $table->string('Ex_ClienteCod');
            $table->string('Ex_ClienteFanta', 50);
            $table->string('Ex_ClienteRazao', 50);
            $table->string('Ex_ClienteLogin', 50);
            $table->string('Ex_ClienteSenha', 50);
            $table->string('Ex_RefCliente', 50);
            $table->string('Ex_EmailCliente', 200);
            $table->string('Ex_Shipper', 50);
            $table->string('Ex_Consignee', 50);
            $table->dateTime('Ex_Gravacao');
            $table->string('Ex_Cancela', 50);
            $table->string('Ex_Origem', 50);
            $table->string('Ex_Destino', 50);
            $table->string('Ex_Via', 50);
            $table->string('Ex_Receipt', 50);
            $table->string('Ex_FinalDest', 50);
            $table->string('Ex_TipoCarga', 50);
            $table->integer('Ex_Quantidade');
            $table->float('Ex_Peso');
            $table->float('Ex_Cubagem');
            $table->dateTime('Ex_DtReserva');
            $table->dateTime('Ex_EntregaCarga');
            $table->dateTime('Ex_EntregaDoc');
            $table->string('Ex_Navio', 50);
            $table->string('Ex_Agente', 50);
            $table->string('Ex_Viagem', 50);
            $table->integer('Ex_ConsoCodigo');
            $table->string('Ex_ConsoNumero', 50);
            $table->string('Ex_TransitTime', 50);
            $table->dateTime('Ex_ETA');
            $table->dateTime('Ex_ETD');
            $table->dateTime('Ex_SaidaNavio');
            $table->dateTime('Ex_DtTransbo');
            $table->dateTime('Ex_DtChegDestino');
            $table->string('Ex_Container', 250);
            $table->string('Ex_TipoTransbo', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Rast_Expo', function (Blueprint $table) {
            //
        });
    }
}
