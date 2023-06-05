<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            [
                'nombre_curso' => 'Excel',
                'id_maestro' => 1,
            ],
            [
                'nombre_curso' => 'PowerPoint',
                'id_maestro' => 2,
            ],
            [
                'nombre_curso' => 'Word',
                'id_maestro' => 3,
            ]
        ]);
    }
}
