<?php

use Illuminate\Database\Seeder;
use App\Service;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Service::class, 50)->create();
        DB::table('services')->insert(['name' => 'Soldadura eléctrica, autógena, tig, soldadura en aluminio']);
        DB::table('services')->insert(['name' => 'Electricidad industrial, instalaciones eléctricas']);
        DB::table('services')->insert(['name' => 'Electricidad media y baja tensión']);
        DB::table('services')->insert(['name' => 'Instalación de trasformadores, transformix seccionadores']);
        DB::table('services')->insert(['name' => 'Refrigeración comercial e industrial']);
        DB::table('services')->insert(['name' => 'Elaboración de tableros eléctricos y de transferencia, Reparación de máquinas de calor']);
        DB::table('services')->insert(['name' => 'Aire acondicionado automotriz, industrial y residencial']);
        DB::table('services')->insert(['name' => 'Rebobinados de motores eléctricos, generadores']);
        DB::table('services')->insert(['name' => 'Calderos de vapor. Autoclaves de vapor. Marmitas. Tavolas caldas']);
        DB::table('services')->insert(['name' => 'Instalación de plantas de tratamiento de agua residuales, agua de mesa, ablandadores de agua']);
        DB::table('services')->insert(['name' => 'Venta de osmosis inversa. Torres de enfriamiento']);
        DB::table('services')->insert(['name' => 'Instalación de puestas a tierra, mayas, parrarayos']);
        DB::table('services')->insert(['name' => 'Instalación de sistemas de gases medicinales, oxigeno, vacío, oxido nitroso, aire medicinal']);
        DB::table('services')->insert(['name' => 'Reparación, mantenimiento y proyecto de subestaciones eléctricas']);
        DB::table('services')->insert(['name' => 'Automatización de plantas, instalación de variadores de frecuencia, PLC Y sensores']);
        DB::table('services')->insert(['name' => 'Proyectos eléctricos, climatización extracción y obras eléctricas']);
        DB::table('services')->insert(['name' => 'Venta de motores eléctricos, electrobombas, rodamientos, paneles, refrigerantes']);
        DB::table('services')->insert(['name' => 'Aires acondicionados, extractores de aire. Conductores eléctricos, llaves térmicas, variadores de frecuencia, interruptores térmicos, contactares. Compresores']);
    }
}
