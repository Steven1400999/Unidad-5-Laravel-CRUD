<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('maestros')->insert([
            [
                'nombre_maestro' => 'John',
                'apellido' => 'Doe',
                'edad_maestro' => 35,
                'id_ciudad' => 1,
            ],
            [
                'nombre_maestro' => 'Jane',
                'apellido' => 'Smith',
                'edad_maestro' => 40,
                'id_ciudad' => 2,
            ],
            [
                'nombre_maestro' => 'Juan',
                'apellido' => 'Fernandes',
                'edad_maestro' => 55,
                'id_ciudad' => 2,
            ]
        
        ]);
    }
}
