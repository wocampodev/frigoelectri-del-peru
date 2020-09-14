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
        DB::table('services')->insert(['name' => 'Instalaciones de gases', 'slug' => 'instalaciones-de-gases', 'short_description' => 'Instalación de sistemas de gases medicinales, oxigeno, vacío, oxido nitroso, aire medicinal', 'image' => 'instalacion-gas-medicinal.jpeg']);
        DB::table('services')->insert(['name' => 'Aire acondicionado', 'slug' => 'aire-acondicionado', 'short_description' => 'Aire acondicionado industrial y residencial', 'image' => 'mantenimiento-aire-acondicionado.jpg']);
        DB::table('services')->insert(['name' => 'Ventilación interna', 'slug' => 'ventilacion', 'short_description' => 'Ventilación para oficinas', 'image' => 'ventilacion.jpeg']);
        DB::table('services')->insert(['name' => 'Aire acondicionado automotriz', 'slug' => 'aire-acondicionado-automotriz', 'short_description' => 'Instalación y mantenimiento de aire acondicionado automotriz', 'image' => 'aire-acondicionado-automotriz.jpeg']);
        DB::table('services')->insert(['name' => 'Secadores', 'slug' => 'secadores', 'short_description' => 'Instalación y mantenimiento de secadores', 'image' => 'mantenimiento-secadores.jpg']);
        DB::table('services')->insert(['name' => 'Reparaciones y mantenimiento', 'slug' => 'reparaciones-y-mantenimiento', 'short_description' => 'Reparación, mantenimiento y proyecto de subestaciones eléctricas. Reparación de máquinas de calor', 'image' => 'reparacion-aire.jpeg']);
        DB::table('services')->insert(['name' => 'Electicidad de baja tensión', 'slug' => 'electricidad-baja-tension', 'short_description' => 'Instalaciones y mantenimiento de electricidad de baja tensión', 'image' => 'proyecto-baja-media-tension.jpg']);
        DB::table('services')->insert(['name' => 'Electicidad de media tensión', 'slug' => 'electricidad-media-tension', 'short_description' => 'Instalaciones y mantenimiento de electricidad de media tensión', 'image' => 'proyecto-media-tension.jpg']);
        DB::table('services')->insert(['name' => 'Fabricación de tableros', 'slug' => 'fabricacion-de-tableros', 'short_description' => 'Elaboración de tableros eléctricos y de transferencia', 'image' => 'fabricacion-tableros.jpeg']);
        DB::table('services')->insert(['name' => 'Tableros eléctricos y de transferencia', 'slug' => 'tableros-electricos-y-de-transferencia', 'short_description' => 'Reparación y mantenimiento de tableros eléctricos y de transferencia', 'image' => 'tablero-transferencia.jpg']);
        DB::table('services')->insert(['name' => 'Refrigeración', 'slug' => 'refrigeracion', 'short_description' => 'Refrigeración comercial e industrial', 'image' => 'refrigeracion.jpg']);
        DB::table('services')->insert(['name' => 'Mantenimiento e instalaciones eléctricas', 'slug' => 'mantenimiento-instalaciones-electricas', 'short_description' => 'Mantenimiento e instalaciones eléctricas', 'image' => 'mantenimiento-tableros.jpg']);
        DB::table('services')->insert(['name' => 'Instalaciones de puestas a tierra', 'slug' => 'instalaciones-de-puestas-a-tierras', 'short_description' => 'Instalación de puestas a tierra, mayas, parrarayos', 'image' => 'puesta-a-tierra.jpeg']);
        //DB::table('services')->insert(['name' => 'Instalación de plantas de tratamiento de agua', 'slug' => 'instalacion-de-plantas-de-tratamiento-de-agua', 'short_description' => 'Instalación de plantas de tratamiento de agua residuales, agua de mesa, ablandadores de agua']);
        //DB::table('services')->insert(['name' => 'Soldadura', 'slug' => 'soldadura', 'short_description' => 'Soldadura eléctrica, autógena, tig, soldadura en aluminio']);
        //DB::table('services')->insert(['name' => 'Transformadores', 'slug' => 'transformadores', 'short_description' => 'Instalación de trasformadores, transformix seccionadores']);
        //DB::table('services')->insert(['name' => 'Rebobinados de motores', 'slug' => 'rebobinados-de-motores', 'short_description' => 'Rebobinados de motores eléctricos, generadores']);
        //DB::table('services')->insert(['name' => 'Proyectos eléctricos', 'slug' => 'proyectos-electricos', 'short_description' => 'Proyectos eléctricos, climatización extracción y obras eléctricas']);
        //DB::table('services')->insert(['name' => 'Calderos y autoclaves de vapor', 'slug' => 'calderos-y-autoclaves-de-valor', 'short_description' => 'Calderos de vapor. Autoclaves de vapor. Marmitas. Tavolas caldas']);
        //DB::table('services')->insert(['name' => 'Venta de osmosis inversa', 'slug' => 'venta-de-osmosis-inversa', 'short_description' => 'Venta de osmosis inversa. Torres de enfriamiento']);
        //DB::table('services')->insert(['name' => 'Automatización de plantas', 'slug' => 'automatizacion-de-plantas', 'short_description' => 'Automatización de plantas, instalación de variadores de frecuencia, PLC Y sensores']);
        //DB::table('services')->insert(['name' => 'Venta de motores', 'slug' => 'venta-de-motores', 'short_description' => 'Venta de motores eléctricos, electrobombas, rodamientos, paneles, refrigerantes']);
        //DB::table('services')->insert(['name' => 'Conductores y Compresores', 'slug' => 'conductores-y-compresores', 'short_description' => 'Aires acondicionados, extractores de aire. Conductores eléctricos, llaves térmicas, variadores de frecuencia, interruptores térmicos, contactares. Compresores']);
    }
}
