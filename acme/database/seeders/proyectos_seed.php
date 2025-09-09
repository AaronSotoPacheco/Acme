<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class proyectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('proyectos')->insert([
            'plano_id' => 1,
            'empleado_id'=>1,
            'nombre_proyecto'=>'Hotel NCG',
            'fecha_proyecto'=>date('Y-m-d'),
            'user_id'=>11,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
          DB::table('proyectos')->insert([
            'plano_id' => 2,
            'empleado_id'=>2,
            'nombre_proyecto'=>'Hotel NCG',
            'fecha_proyecto'=>date('Y-m-d'),
            'user_id'=>12,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
