<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciudades')->insert([
            [
                'nombre_ciudad' => 'Aguascalientes'
            ],
            [
                'nombre_ciudad' => 'Zacatecas'
            ]
        ]);
    }
}
