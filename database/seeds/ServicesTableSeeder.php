<?php

use Illuminate\Database\Seeder;
//use App\Service;
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
        DB::table('services')->insert(['name' => 'Instalaciones de gases', 'slug' => 'instalaciones-de-gases', 'short_description' => 'Instalación de sistemas de gases medicinales, oxigeno, vacío, oxido nitroso, aire medicinal']);
        DB::table('services')->insert(['name' => 'Aire acondicionado', 'slug' => 'aire-acondicionado', 'short_description' => 'Aire acondicionado automotriz, industrial y residencial']);
        DB::table('services')->insert(['name' => 'Reparaciones y mantenimiento', 'slug' => 'reparaciones-y-mantenimiento', 'short_description' => 'Reparación, mantenimiento y proyecto de subestaciones eléctricas. Reparación de máquinas de calor']);
        DB::table('services')->insert(['name' => 'Proyectos eléctricos', 'slug' => 'proyectos-electricos', 'short_description' => 'Proyectos eléctricos, climatización extracción y obras eléctricas']);
        DB::table('services')->insert(['name' => 'Soldadura', 'slug' => 'soldadura', 'short_description' => 'Soldadura eléctrica, autógena, tig, soldadura en aluminio']);
        DB::table('services')->insert(['name' => 'Electicidad', 'slug' => 'electricidad', 'short_description' => 'Electricidad industrial, electricidad media y baja tensión, instalaciones eléctricas']);
        DB::table('services')->insert(['name' => 'Transformadores', 'slug' => 'transformadores', 'short_description' => 'Instalación de trasformadores, transformix seccionadores']);
        DB::table('services')->insert(['name' => 'Refrigeración', 'slug' => 'refrigeracion', 'short_description' => 'Refrigeración comercial e industrial']);
        DB::table('services')->insert(['name' => 'Tableros eléctricos y de transferencia', 'slug' => 'tableros-electricos-y-de-transferencia', 'short_description' => 'Elaboración de tableros eléctricos y de transferencia']);
        DB::table('services')->insert(['name' => 'Rebobinados de motores', 'slug' => 'rebobinados-de-motores', 'short_description' => 'Rebobinados de motores eléctricos, generadores']);
        DB::table('services')->insert(['name' => 'Calderos y autoclaves de vapor', 'slug' => 'calderos-y-autoclaves-de-valor', 'short_description' => 'Calderos de vapor. Autoclaves de vapor. Marmitas. Tavolas caldas']);
        DB::table('services')->insert(['name' => 'Instalación de plantas de tratamiento de agua', 'slug' => 'instalacion-de-plantas-de-tratamiento-de-agua', 'short_description' => 'Instalación de plantas de tratamiento de agua residuales, agua de mesa, ablandadores de agua']);
        DB::table('services')->insert(['name' => 'Venta de osmosis inversa', 'slug' => 'venta-de-osmosis-inversa', 'short_description' => 'Venta de osmosis inversa. Torres de enfriamiento']);
        DB::table('services')->insert(['name' => 'Instalaciones de puestas a tierra', 'slug' => 'instalaciones-de-puestas-a-tierras', 'short_description' => 'Instalación de puestas a tierra, mayas, parrarayos']);
        DB::table('services')->insert(['name' => 'Automatización de plantas', 'slug' => 'automatizacion-de-plantas', 'short_description' => 'Automatización de plantas, instalación de variadores de frecuencia, PLC Y sensores']);
        DB::table('services')->insert(['name' => 'Venta de motores', 'slug' => 'venta-de-motores', 'short_description' => 'Venta de motores eléctricos, electrobombas, rodamientos, paneles, refrigerantes']);
        DB::table('services')->insert(['name' => 'Conductores y Compresores', 'slug' => 'conductores-y-compresores', 'short_description' => 'Aires acondicionados, extractores de aire. Conductores eléctricos, llaves térmicas, variadores de frecuencia, interruptores térmicos, contactares. Compresores']);
    }
}
