<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert(['name' => 'AGROAURORA', 'image' => 'agroaurora.png']);
        DB::table('clients')->insert(['name' => 'AGROLATAM', 'image' => 'agrolatam.png']);
        DB::table('clients')->insert(['name' => 'AGROLMOS', 'image' => 'agrolmos.png']);
        DB::table('clients')->insert(['name' => 'BODYTECH', 'image' => 'bodytech.png']);
        DB::table('clients')->insert(['name' => 'OSORIA SMILE', 'image' => 'osoria.png']);
        DB::table('clients')->insert(['name' => 'AGRICOLA PAMPABAJA S.A.C', 'image' => 'pampabaja.png']);
        DB::table('clients')->insert(['name' => 'BETA - COMPLEJO AGROINDUSTRIAL', 'image' => 'beta.png']);
        DB::table('clients')->insert(['name' => 'VITALINE', 'image' => 'vitaline.png']);
    }
}
