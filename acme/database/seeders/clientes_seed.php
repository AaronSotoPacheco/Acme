<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class clientes_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'nombre_cliente' => 'Aaron Gabriel',
            'apellidos_cliente' => 'Soto Pacheco',
            'fecha_visita'=>date('Y-m-d'),
            'telefono'=>123,
            'user_id'=>1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    DB::table('clientes')->insert([
            'nombre_cliente' => 'Aaron Gabriel',
            'apellidos_cliente' => 'Soto Pacheco',
            'fecha_visita'=>date('Y-m-d'),
            'telefono'=>123,
            'user_id'=>2,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
