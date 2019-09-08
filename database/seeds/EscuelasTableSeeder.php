<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EscuelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Escuelas')->insert([
            [
                'nombre' => 'Construcción e Ingeniería',
                'descripcion' => 'Formar personas dispuestas a servir, cuya función esencial es la gestión tecnológica y administrativa, respondiendo a las necesidades de un mundo globalizado.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Negocio',
                'descripcion' => 'Formar profesionales con capacidad para emprender y superarse que a través de sus competencias, fomentando el mejoramiento continuo y el desarrollo sustentable integrando la gestión social, ambiental y económica dentro de una organización.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Salud',
                'descripcion' => 'Formar personas para servir, basándose en la humanización y respeto al prójimo. Ser activos en la promoción, prevención, siendo agentes de cambio en la calidad de la atención en la salud.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Diseño, Arte y Comunicación',
                'descripcion' => 'Desarrollar el espíritu de pertenencia e identificación con el quehacer del comunicador, descubriendo que la creatividad está al servicio del entorno, característica que fortalece la vinculación con el mundo laboral.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Gastronomía, Hotelería y Turismo',
                'descripcion' => 'Formar y preparar técnicos y profesionales que ejerzan con altos estándares de calidad en la industria gastronómica, hotelera y turística, tanto a nivel nacional como internacional, con criterios de sustentabilidad y de gestión medioambiental.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => 'Desarrollo Social',
                'descripcion' => 'Formar profesionales y técnicos en los ámbitos de la educación, el trabajo social y la asistencia jurídica, conforme a principios éticos de confidencialidad, responsabilidad y respeto a la persona. El sello de los titulados de la Escuela de Desarrollo Social es la capacidad de observar, proponer y contribuir a la mejora de la realidad social en que se desempeñan.',
                'user_id' => '1',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
