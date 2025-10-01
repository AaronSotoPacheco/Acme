<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
           DB::table('planos')->insert([
            'hoja_id' => 1,
            'zona_id'=>1,
            'nombre_plano'=>'plano1',
            'localizacion'=>'NCG',
            'fecha_actualizacion'=>date('Y-m-d'),
            'numeros_condominios'=>10,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
         DB::table('planos')->insert([
            'hoja_id' => 2,
            'zona_id'=>1,
            'nombre_plano'=>'plano1',
            'localizacion'=>'NCG',
            'fecha_actualizacion'=>date('Y-m-d'),
            'numeros_condominios'=>10,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
