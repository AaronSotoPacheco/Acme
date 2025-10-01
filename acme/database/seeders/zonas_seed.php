<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class zonas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('zonas')->insert([
            'nombre_zona'=>'poniente',
            'created_at'=>date('Y-m-d h:m:s')

        ]);
         DB::table('zonas')->insert([
            'nombre_zona'=>'poniente',
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
