<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RastHouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('A_Rast_House')->insert([
            [
                'Ra_CodHouse' => 123456,
                'Ra_CodMaster' => rand(0, 99999),
                'Ra_ExpImp' => Str::random(50),
                'Ra_RefMaster' => Str::random(50),
                'Ra_RefHouse' => Str::random(50),
                'Ra_MAWB' => Str::random(50),
                'Ra_HAWB' => Str::random(50),
                'Ra_CiaAerea' => Str::random(50),
                'Ra_OriCid' => Str::random(50),
                'Ra_OriAero' => Str::random(50),
                'Ra_DesCid' => Str::random(200),
                'Ra_DesAero' => Str::random(50),
                'Ra_FinalDest' => Str::random(50),
                'Ra_PrevSaida' => new DateTime('now'),
                'Ra_Saida' => new DateTime('now'),
                'Ra_Chegada' => new DateTime('now'),
                'Ra_PrevEntreDest' => new DateTime('now'),
                'Ra_EntregaDest' => new DateTime('now'),
                'Ra_Shipper' => Str::random(150),
                'Ra_Cnee' => Str::random(150),
                'Re_Notify' => Str::random(150),
                'Ra_ClienteNome' => Str::random(150),
                'Ra_ClienteRef' => Str::random(150),
                'Ra_ClienteCod' => rand(0, 99999),
                'Ra_Incoterm' => Str::random(50),
                'Ra_Volume' => rand(0, 99999),
                'Ra_PesoBruto' => rand(0, 99999),
                'Ra_Cubado' => rand(0, 99999),
                'Ra_Taxavel' => rand(0, 99999),
                'Ra_Login' => 'teste1@gmail.com',
                'Ra_Senha' => 'teste1'
            ],
            [
                'Ra_CodHouse' => rand(0, 99999),
                'Ra_CodMaster' => rand(0, 99999),
                'Ra_ExpImp' => Str::random(50),
                'Ra_RefMaster' => Str::random(50),
                'Ra_RefHouse' => Str::random(50),
                'Ra_MAWB' => Str::random(50),
                'Ra_HAWB' => Str::random(50),
                'Ra_CiaAerea' => Str::random(50),
                'Ra_OriCid' => Str::random(50),
                'Ra_OriAero' => Str::random(50),
                'Ra_DesCid' => Str::random(200),
                'Ra_DesAero' => Str::random(50),
                'Ra_FinalDest' => Str::random(50),
                'Ra_PrevSaida' => new DateTime('now'),
                'Ra_Saida' => new DateTime('now'),
                'Ra_Chegada' => new DateTime('now'),
                'Ra_PrevEntreDest' => new DateTime('now'),
                'Ra_EntregaDest' => new DateTime('now'),
                'Ra_Shipper' => Str::random(150),
                'Ra_Cnee' => Str::random(150),
                'Re_Notify' => Str::random(150),
                'Ra_ClienteNome' => Str::random(150),
                'Ra_ClienteRef' => Str::random(150),
                'Ra_ClienteCod' => rand(0, 99999),
                'Ra_Incoterm' => Str::random(50),
                'Ra_Volume' => rand(0, 99999),
                'Ra_PesoBruto' => rand(0, 99999),
                'Ra_Cubado' => rand(0, 99999),
                'Ra_Taxavel' => rand(0, 99999),
                'Ra_Login' => 'teste1@gmail.com',
                'Ra_Senha' => 'teste1'
            ],
            [
                'Ra_CodHouse' => rand(0, 99999),
                'Ra_CodMaster' => rand(0, 99999),
                'Ra_ExpImp' => Str::random(50),
                'Ra_RefMaster' => Str::random(50),
                'Ra_RefHouse' => Str::random(50),
                'Ra_MAWB' => Str::random(50),
                'Ra_HAWB' => Str::random(50),
                'Ra_CiaAerea' => Str::random(50),
                'Ra_OriCid' => Str::random(50),
                'Ra_OriAero' => Str::random(50),
                'Ra_DesCid' => Str::random(200),
                'Ra_DesAero' => Str::random(50),
                'Ra_FinalDest' => Str::random(50),
                'Ra_PrevSaida' => new DateTime('now'),
                'Ra_Saida' => new DateTime('now'),
                'Ra_Chegada' => new DateTime('now'),
                'Ra_PrevEntreDest' => new DateTime('now'),
                'Ra_EntregaDest' => new DateTime('now'),
                'Ra_Shipper' => Str::random(150),
                'Ra_Cnee' => Str::random(150),
                'Re_Notify' => Str::random(150),
                'Ra_ClienteNome' => Str::random(150),
                'Ra_ClienteRef' => Str::random(150),
                'Ra_ClienteCod' => rand(0, 99999),
                'Ra_Incoterm' => Str::random(50),
                'Ra_Volume' => rand(0, 99999),
                'Ra_PesoBruto' => rand(0, 99999),
                'Ra_Cubado' => rand(0, 99999),
                'Ra_Taxavel' => rand(0, 99999),
                'Ra_Login' => 'teste2@gmail.com',
                'Ra_Senha' => 'teste2'
            ],
            [
                'Ra_CodHouse' => rand(0, 99999),
                'Ra_CodMaster' => rand(0, 99999),
                'Ra_ExpImp' => Str::random(50),
                'Ra_RefMaster' => Str::random(50),
                'Ra_RefHouse' => Str::random(50),
                'Ra_MAWB' => Str::random(50),
                'Ra_HAWB' => Str::random(50),
                'Ra_CiaAerea' => Str::random(50),
                'Ra_OriCid' => Str::random(50),
                'Ra_OriAero' => Str::random(50),
                'Ra_DesCid' => Str::random(200),
                'Ra_DesAero' => Str::random(50),
                'Ra_FinalDest' => Str::random(50),
                'Ra_PrevSaida' => new DateTime('now'),
                'Ra_Saida' => new DateTime('now'),
                'Ra_Chegada' => new DateTime('now'),
                'Ra_PrevEntreDest' => new DateTime('now'),
                'Ra_EntregaDest' => new DateTime('now'),
                'Ra_Shipper' => Str::random(150),
                'Ra_Cnee' => Str::random(150),
                'Re_Notify' => Str::random(150),
                'Ra_ClienteNome' => Str::random(150),
                'Ra_ClienteRef' => Str::random(150),
                'Ra_ClienteCod' => rand(0, 99999),
                'Ra_Incoterm' => Str::random(50),
                'Ra_Volume' => rand(0, 99999),
                'Ra_PesoBruto' => rand(0, 99999),
                'Ra_Cubado' => rand(0, 99999),
                'Ra_Taxavel' => rand(0, 99999),
                'Ra_Login' => 'teste2@gmail.com',
                'Ra_Senha' => 'teste2'
            ],
        ]);
    }
}
