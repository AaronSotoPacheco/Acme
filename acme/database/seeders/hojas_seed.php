<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class hojas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           DB::table('hojas')->insert([
            'numero_hoja' => 1,
            'created_at'=>date('Y-m-d h:m:s')

        ]);

                   DB::table('hojas')->insert([
            'numero_hoja' => 2,
            'created_at'=>date('Y-m-d h:m:s')

        ]);
    }
}
