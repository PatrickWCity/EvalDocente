<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Carreras')->insert([
            [
                'nombre' => 'Técnico en Programación Computacional',
                'descripcion' => 'El Técnico en Programación Computacional es un técnico de nivel superior capacitado para realizar el ciclo de desarrollo de software de acuerdo a especificaciones, contemplando la construcción, prueba e implementación de soluciones según los requerimientos de clientes y estándares de calidad de la industria.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Técnico en Programación y Análisis de Sistemas',
                'descripcion' => 'El Técnico de Programación y Análisis de Sistemas es un técnico de nivel superior capacitado para realizar el ciclo de desarrollo de software, incorporando en ello el análisis de requerimientos y el diseño, construcción, pruebas e implementación de soluciones.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Ingeniería de Ejecución en Informática Mención Desarrollo de Sistemas',
                'descripcion' => 'El Ingeniero de Ejecución en Informática es un profesional capacitado para proponer soluciones informáticas integrales en software y hardware de acuerdo a requerimientos y necesidades del cliente, gestionando la implementación de estas y evaluando su funcionamiento.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Ingeniería de Ejecución en Administración de Redes',
                'descripcion' => 'El Ingeniero de Ejecución en Administración de Redes es un profesional capacitado para proponer soluciones integrales de sistemas de redes y conectividad, de acuerdo a requerimientos y necesidades del cliente, gestionando la implementación de estas y evaluando su funcionamiento. Asimismo, será capaz de implementar, desarrollar e integrar soluciones informáticas en procesos productivos que requieren exigentes niveles de conectividad, aplicando protocolos y estándares internacionales.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Diseño Gráfico',
                'descripcion' => 'El Diseñador Gráfico es un profesional capacitado para diseñar y producir proyectos de identidad corporativa, diseño de marca y comunicación gráfica masiva por medios gráficos impresos, digitales y web, conforme a los requerimientos del cliente y a los estándares de la industria del diseño.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Gastronomía Internacional',
                'descripcion' => 'El Técnico de Nivel Superior en Gastronomía Internacional es un profesional técnico con competencias para elaborar ofertas gastronómicas en cocina típica tradicional chilena e internacional y en vinos, bebidas y licores, de acuerdo a los requerimientos del cliente, a los estándares de la industria gastronómica y a la legislación vigente, velando por las condiciones de higiene, seguridad y costos, en un contexto de amabilidad, cortesía, responsabilidad social y sustentabilidad.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
