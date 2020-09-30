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
        DB::table('services')->insert(['name' => 'Instalaciones de Gases Medicinales', 'slug' => 'instalaciones-de-gases', 'short_description' => 'Instalación de gases medicinales.', 'image' => 'instalacion-gas-medicinal.jpeg']);
        DB::table('services')->insert(['name' => 'Aire Acondicionado', 'slug' => 'aire-acondicionado', 'short_description' => 'Venta, instalación, limpieza y mantenimiento de aire acondicionado.', 'image' => 'mantenimiento-aire-acondicionado.jpg']);
        DB::table('services')->insert(['name' => 'Ventilación Interna', 'slug' => 'ventilacion', 'short_description' => 'Instalación, mantenimiento, reparación y puesta en marcha de la ventilación que tu empresa u oficina necesita.', 'image' => 'ventilacion.jpeg']);
        DB::table('services')->insert(['name' => 'Proyectos Eléctricos e Ingeniería Electromecánica', 'slug' => 'proyectos-electricos', 'short_description' => 'Realizamos todo tipo de proyectos electricos y de ingeniería electromecánica.', 'image' => 'aire-acondicionado-automotriz.jpeg']);
        DB::table('services')->insert(['name' => 'Secadores', 'slug' => 'secadores', 'short_description' => 'Instalación, mantenimiento y cambio de secadores.', 'image' => 'mantenimiento-secadores.jpg']);
        DB::table('services')->insert(['name' => 'Reparaciones y Mantenimiento', 'slug' => 'reparaciones-y-mantenimiento', 'short_description' => 'Aire acondicionado, de subestaciones eléctricas, electrobombas y todo tipo de servicio eléctrico.', 'image' => 'reparacion-aire.jpeg']);
        DB::table('services')->insert(['name' => 'Electricidad de Baja tensión', 'slug' => 'electricidad-baja-tension', 'short_description' => 'Proyectos eléctricos, climatización extracción y obras eléctricas.', 'image' => 'proyecto-baja-media-tension.jpg']);
        DB::table('services')->insert(['name' => 'Electricidad de Media tensión', 'slug' => 'electricidad-media-tension', 'short_description' => 'Reparación, mantenimiento y proyectos de subestaciones eléctricas.', 'image' => 'proyecto-media-tension.jpg']);
        DB::table('services')->insert(['name' => 'Fabricación de tableros', 'slug' => 'fabricacion-de-tableros', 'short_description' => 'Elaboración de tableros eléctricos y de transferencia', 'image' => 'fabricacion-tableros.jpeg']);
        DB::table('services')->insert(['name' => 'Tableros eléctricos y de transferencia', 'slug' => 'tableros-electricos-y-de-transferencia', 'short_description' => 'Reparación y mantenimiento de tableros eléctricos y de transferencia.', 'image' => 'tablero-transferencia.jpg']);
        DB::table('services')->insert(['name' => 'Refrigeración', 'slug' => 'refrigeracion', 'short_description' => 'Refrigeración comercial e industrial.', 'image' => 'refrigeracion.jpg']);
        DB::table('services')->insert(['name' => 'Mantenimiento de Instalaciones Eléctricas', 'slug' => 'mantenimiento-instalaciones-electricas', 'short_description' => 'Mantenimiento y reparación de instalaciones eléctricas con nuestro equipo profesional.', 'image' => 'mantenimiento-tableros.jpg']);
        DB::table('services')->insert(['name' => 'Instalaciones de puestas a tierra', 'slug' => 'instalaciones-de-puestas-a-tierras', 'short_description' => 'Instalación de puestas a tierra, mayas y parrarayos. Seguridad y confianza.', 'image' => 'puesta-a-tierra.jpeg']);
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
