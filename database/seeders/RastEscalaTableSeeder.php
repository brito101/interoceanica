<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RastEscalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('A_Rast_Escala')->insert([
            [
                'Re_Codigo' => 123456,
                'Re_CodMaster' => rand(0, 99999),
                'Re_Aeroporto' => Str::random(50),
                'Re_Flight' => Str::random(50),
                'Re_Data' => new DateTime('now'),
                'Re_Hora' => new DateTime('now')
            ],
            [
                'Re_Codigo' => 123457,
                'Re_CodMaster' => rand(0, 99999),
                'Re_Aeroporto' => Str::random(50),
                'Re_Flight' => Str::random(50),
                'Re_Data' => new DateTime('now'),
                'Re_Hora' => new DateTime('now')
            ],
            [
                'Re_Codigo' => rand(0, 99999),
                'Re_CodMaster' => rand(0, 99999),
                'Re_Aeroporto' => Str::random(50),
                'Re_Flight' => Str::random(50),
                'Re_Data' => new DateTime('now'),
                'Re_Hora' => new DateTime('now')
            ],
            [
                'Re_Codigo' => rand(0, 99999),
                'Re_CodMaster' => rand(0, 99999),
                'Re_Aeroporto' => Str::random(50),
                'Re_Flight' => Str::random(50),
                'Re_Data' => new DateTime('now'),
                'Re_Hora' => new DateTime('now')
            ],
            [
                'Re_Codigo' => rand(0, 99999),
                'Re_CodMaster' => rand(0, 99999),
                'Re_Aeroporto' => Str::random(50),
                'Re_Flight' => Str::random(50),
                'Re_Data' => new DateTime('now'),
                'Re_Hora' => new DateTime('now')
            ],
        ]);
    }
}
