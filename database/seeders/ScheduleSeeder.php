<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schedules = [
            [
                'date' => '2023-09-18',
                'time' => '12:30',
                
                'activity' => 'Reunión de promoción y evaluación secundaria IIIP',
                'responsible' => 'Docentes de secundaria',
            ],
            [
                'date' => '2023-11-08',
                'time' => '12:30',
                
                'activity' => 'Reunión de promoción y evaluación secundaria IVP',
                'responsible' => 'Docentes de secundaria',
            ],
            [
                'date' => '2023-09-22',
                'time' => null,
                
                'activity' => 'Finalización IIIP',
                'responsible' => 'Docentes y directores de Grupo',
            ],
            [
                'date' => '2023-09-25',
                'time' => null,
               
                'activity' => 'Comienzo IVP',
                'responsible' => 'Docentes y directores de Grupo',
            ],
            [
                'date' => '2023-09-25',
                'time' => '7:00',
                
                'activity' => 'Reunión de promoción y evaluación del IIIP, con representante de estudiantes y padres de familia.',
                'responsible' => 'Director de cada grupo con representante de estudiantes y padres de familia',
            ],
            [
                'date' => '2023-09-26',
                'time' => null,
                
                'activity' => 'Cierre del sistema de notas',
                'responsible' => 'Todos los docentes de cada área',
            ],
            [
                'date' => '2023-09-28',
                'time' => null,
                
                'activity' => 'Entrega de informes IIIP. Proceso de Renovación de Matrícula 2024.',
                'responsible' => 'Directores de grupo',
            ],
            [
                'date' => '2023-10-09',
                'time' => null,
                
                'activity' => 'Receso estudiantil. Cuarta Semana de Desarrollo Institucional',
                'responsible' => null,
            ],
            [
                'date' => '2023-11-2',
                'time' => null,
                
                'activity' => 'Celebración día de la familia, día de logros y semilleros lúdicos de aprendizaje.',
                'responsible' => null,
            ],
            [
                'date' => '2023-11-21',
                'time' => null,
                
                'activity' => 'Entrega de símbolos y despedida para grado 11°',
                'responsible' => 'Directora de grupo grado 10° con sus estudiantes.',
            ],
            [
                'date' => '2023-11-24',
                'time' => null,
                'location' => 'Lugar a definir',
                'activity' => 'Ceremonia de Graduación para 11°.',
                'responsible' => 'Todos los docentes de secundaria y primaria de las tres sedes.',
            ],
            [
                'date' => '2023-11-27',
                'time' => null,
                
                'activity' => 'Actos de Clausura, Entrega de cuarto Informe Académico y Quinto Definitivo del Año Lectivo',
                'responsible' => 'Docentes de primaria y secundaria'
            ],
            [
                'date' => '2023-11-27',
                'time' => null,
                
                'activity' => 'Quinta Semana de Desarrollo Institucional',
                'responsible' => 'Todos los docentes'
            ]
            /*
            [
                'date' => '',
                'time' => '',
                'place' => '',
                'activity' => '',
                'responsible' => ''
            ],
            */	
        ];

        foreach ($schedules as $schedule) {
            Schedule::create($schedule);
        }
    }
}
