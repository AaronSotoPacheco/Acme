<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class empleados_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('empleados')->insert([
            'nombre_empleado' => 'Sebastian',
            'apellidos_empleado' => 'Chacon Bencomo ',
            'fecha_contratacion'=>date('Y-m-d'),
            'puesto'=>'arquitecto',
            'user_id'=>12,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
   DB::table('empleados')->insert([
            'nombre_empleado' => 'Sebastian',
            'apellidos_empleado' => 'Chacon Bencomo ',
            'fecha_contratacion'=>date('Y-m-d'),
            'puesto'=>'arquitecto',
            'user_id'=>11,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

    }
}
