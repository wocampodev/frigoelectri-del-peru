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
        DB::table('clients')->insert(['name' => 'AGROAURORA', 'image' => 'agroaurora.jpg']);
        DB::table('clients')->insert(['name' => 'AGROLATAM', 'image' => 'agrolatam.jpg']);
        DB::table('clients')->insert(['name' => 'AGROLMOS', 'image' => 'agrolmos.jpg']);
        DB::table('clients')->insert(['name' => 'BODYTECH', 'image' => 'bodytech.jpg']);
        DB::table('clients')->insert(['name' => 'OSORIA SMILE', 'image' => 'osoria.jpg']);
        DB::table('clients')->insert(['name' => 'AGRICOLA PAMPABAJA S.A.C', 'image' => 'pampabaja.jpg']);
        DB::table('clients')->insert(['name' => 'BETA - COMPLEJO AGROINDUSTRIAL', 'image' => 'beta.jpg']);
        DB::table('clients')->insert(['name' => 'VITALINE', 'image' => 'vitaline.jpg']);
    }
}
