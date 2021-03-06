<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RastExpoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Rast_Expo')->insert([
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste1@gmail.com',
                'Ex_ClienteSenha' => 'teste1',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste1@gmail.com',
                'Ex_ClienteSenha' => 'teste1',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste1@gmail.com',
                'Ex_ClienteSenha' => 'teste1',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste2@gmail.com',
                'Ex_ClienteSenha' => 'teste2',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste2@gmail.com',
                'Ex_ClienteSenha' => 'teste2',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste2@gmail.com',
                'Ex_ClienteSenha' => 'teste2',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ],
            [
                'Ex_ReservaCod' => rand(0, 99999),
                'Ex_ReservaNr' => Str::random(50),
                'Ex_BLNr' => Str::random(50),
                'Ex_ClienteCod' => Str::random(191),
                'Ex_ClienteFanta' => Str::random(50),
                'Ex_ClienteRazao' => Str::random(50),
                'Ex_ClienteLogin' => 'teste2@gmail.com',
                'Ex_ClienteSenha' => 'teste2',
                'Ex_RefCliente' => Str::random(50),
                'Ex_EmailCliente' => Str::random(200),
                'Ex_Shipper' => Str::random(50),
                'Ex_Consignee' => Str::random(50),
                'Ex_Gravacao' => new DateTime('now'),
                'Ex_Cancela' => Str::random(50),
                'Ex_Origem' => Str::random(50),
                'Ex_Destino' => Str::random(50),
                'Ex_Via' => Str::random(50),
                'Ex_Receipt' => Str::random(50),
                'Ex_FinalDest' => Str::random(50),
                'Ex_TipoCarga' => Str::random(50),
                'Ex_Quantidade' => rand(0, 99999),
                'Ex_Peso' => rand(0, 99999),
                'Ex_Cubagem' => rand(0, 99999),
                'Ex_DtReserva' => new DateTime('now'),
                'Ex_EntregaCarga' => new DateTime('now'),
                'Ex_EntregaDoc' => new DateTime('now'),
                'Ex_Navio' => Str::random(50),
                'Ex_Agente' => Str::random(50),
                'Ex_Viagem' => Str::random(50),
                'Ex_ConsoCodigo' => rand(0, 99999),
                'Ex_ConsoNumero' => Str::random(50),
                'Ex_TransitTime' => Str::random(50),
                'Ex_ETA' => new DateTime('now'),
                'Ex_ETD' => new DateTime('now'),
                'Ex_SaidaNavio' => new DateTime('now'),
                'Ex_DtTransbo' => new DateTime('now'),
                'Ex_DtChegDestino' => new DateTime('now'),
                'Ex_Container' => Str::random(50),
                'Ex_TipoTransbo' => Str::random(50)
            ]
        ]);
    }
}
