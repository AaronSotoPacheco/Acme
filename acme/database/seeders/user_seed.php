<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i =0;$i<10;$i++){ 
            DB::table('users')->insert([
            'name' => 'Aaron Soto' .$i,
            'email' => 'test'.$i.'@example.com',
            'nivel'=>1,
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d h:m:s')

        ]);}
       
for($i =11;$i<20;$i++){
 DB::table('users')->insert([
            'name' => 'Sebastian Chacon' .$i,
            'email' => 'test'.$i.'@example.com',
            'nivel'=>2,
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d h:m:s')

        ]);
}
          
    }
}
