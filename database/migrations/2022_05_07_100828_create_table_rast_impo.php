<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRastImpo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rast_Impo', function (Blueprint $table) {
            $table->string('Im_TipoReg', 50);
            $table->integer('Im_MasterCod');
            $table->integer('Im_HouseCod');
            $table->integer('Im_CotacaoCod');
            $table->integer('Im_CneeCod');
            $table->string('Im_CneeNome', 100);
            $table->string('Im_CneeRef', 50);
            $table->string('Im_CneeLogin', 50);
            $table->string('Im_CneeSenha', 50);
            $table->integer('Im_ShipperCod');
            $table->string('Im_ShipperNome', 100);
            $table->integer('Im_NotifyCod');
            $table->string('Im_NotifyNome', 100);
            $table->integer('Im_DespCod');
            $table->string('Im_DespNome', 100);
            $table->integer('Im_ClienteCod');
            $table->string('Im_ClienteNome', 100);
            $table->integer('Im_SeuCliCod');
            $table->string('Im_SeuCliNome', 100);
            $table->integer('Im_OrigemCod');
            $table->string('Im_OrigemNome', 50);
            $table->integer('Im_DestinoCod');
            $table->string('Im_DestinoNome', 50);
            $table->integer('Im_PlaceCod');
            $table->string('Im_PlaceNome', 50);
            $table->integer('Im_FinalCod');
            $table->string('Im_FinalNome', 50);
            $table->string('Im_NrMBL', 50);
            $table->dateTime('Im_DataMBL');
            $table->string('Im_Navio', 50);
            $table->string('Im_Viagem', 50);
            $table->string('Im_Armador', 50);
            $table->string('Im_Terminal', 50);
            $table->dateTime('Im_Atracacao');
            $table->dateTime('Im_Operacao');
            $table->string('Im_NrHBL', 50);
            $table->dateTime('Im_DataHBL');
            $table->string('Im_TipoCarga', 3);
            $table->float('Im_Cubagem');
            $table->float('Im_Peso');
            $table->string('Im_DescriMerc', 100);
            $table->string('Im_CotacaoNr', 50);
            $table->dateTime('Im_DataCota');
            $table->string('Im_ObsStatus', 200);
            $table->dateTime('Im_PrevPront');
            $table->dateTime('Im_PrevSaida');
            $table->dateTime('Im_SaidaReal');
            $table->dateTime('Im_PrevChega');
            $table->dateTime('Im_Gravacao');
            $table->dateTime('Im_GravaHora');
            $table->string('Im_Controle1', 50);
            $table->string('Im_Cancela', 50);
            $table->string('Im_RefMaster', 50);
            $table->string('Im_Tra_Navio', 50);
            $table->string('Im_Tra_Destino', 50);
            $table->dateTime('Im_Tra_PrevSaida');
            $table->dateTime('Im_Tra_Saida');
            $table->dateTime('Im_DtLibera');
            $table->dateTime('Im_DtRetirada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Rast_Impo');
    }
}
