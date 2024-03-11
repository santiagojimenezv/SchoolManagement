<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'DIRECCION_SEDE_PRINCIPAL',
                'value' => 'Km 13 via al magdalena',
            ],
            [
                'key' => 'DIRECCION_SEDE_PORVERNIR',
                'value' => 'Vereda el Desquite cerca al páramo de Letras'
            ],
            [
                'key' => 'DIRECCION_SEDE_COLONIA',
                'value' => 'Recinto Pensamiento, Km 11 via al Magdalena'
            ],
            [
                'key' => 'NOMBRE_INSTITUCION',
                'value' => 'Institución Educativa Maltería'
            ],
            [
                'key' => 'NIVELES_INSTITUCION',
                'value' => 'La Institución educativa cuenta con niveles preescolar, básica primaria, básica secundaria, educación media y articulación con la educación técnica'
            ],
            [
                'key' => 'MODALIDAD_INSTITUCION',
                'value' => 'La Institución educativa presenta una modalidad de escuela nueva con jornada única'
            ],
            [
                'key' => 'VISION_INSTITUCIONAL',
                'value' => 'Para el año 2025, la institución educativa Maltería será reconocida a nivel local, regional, nacional e internacional, por su alto nivel de desarrollo de competencias laborales, generales y específicas; que respondan a las necesidades de un mundo globalizado y beneficiando la calidad de vida de sus estudiantes y sus familias.'
            ],
            [
                'key' => 'MISION_INSTITUCIONAL',
                'value' => 'Formar niños, niñas y jóvenes con enfoque humanista-socializante, inclusivo, competentes en el ámbito Industrial y del campo, para la conservación y saneamiento ambiental, con el fin de desarrollar proyectos productivos que respondan a las necesidades personales, familiares y comunitarias en contexto local, regional y Nacional, mediante metodologías flexibles dentro del modelo escuela nueva.'
            ],
            [
                'key' => 'LEMA_INSTITUCIONAL',
                'value' => 'Liderazgo en emprendimiento y desarrollo humano'
            ],
            [
                'key' => 'LEMA_INSTITUCIONAL2',
                'value' => 'Trabajemos Juntos Para Fortalecer Nuestro Modelo Escuela Nueva'
            ],
            [
                'key' => 'HORARIO_INSTITUCIONAL',
                'value' => 'Lunes a Viernes de 7:00 am a 3:00 pm'
            ],
            [
                'key' => 'CONTACTO_TELEFONO',
                'value' => '+57 3218773581'
            ],
            [
                'key' => 'CONTACTO_EMAIL',
                'value' => 'institucionmalteria@gmail.com'
            ],
            [
                'key' => 'INSTAGRAM_URL',
                'value' => 'https://www.instagram.com/iemalteria'
            ],
            [
                'key' => 'GOOGLE_URL',
                'value' => 'https://www.google.com/search?q=Instituci%C3%B3n+Educativa+Malter%C3%ADa&stick=H4sIAAAAAAAA_-NgU1I1qLBINTE3MzM3MTVOSko1Mk2yAgpZGliapxmYmBmZJJuZJiYuYlXwzCsuySwpTc48vDlPwTWlNDmxJLMsUcE3Macktejw2kQAs4yarUwAAAA&hl=es-419&mat=CdMw-Ysc3S-QElcBeenfiGrtiKNuiUwiqoy9mgQTgvxB-25KTd_VoywmQz9f216e5MgkmSU49yrAtjhedbSQbGqZ8O_doyXCkO0p3H3JZA0OdY0g1sjrDCgkvqgc1bvKwgI&authuser=0&bshm=rime/1'
            ],
            [
                'key' => 'GOOGLE_MAPS_URL',
                'value' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15897.66242552363!2d-75.4310521!3d5.0361599!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47667453bbe25b%3A0x89097f04624c65aa!2sInstituci%C3%B3n%20Educativa%20Malter%C3%ADa!5e0!3m2!1ses-419!2sco!4v1695959456961!5m2!1ses-419!2sco\r\n'
            ],
            [
                'key' => 'PROYECTOS_VIDA_NOMBRE',
                'value' => 'Estilos de vida saludable y proyecto de vida'
            ],
            [
                'key' => 'PROYECTOS_VIDA_DESC',
                'value' => 'Descripción de cada uno de los proyectos pedagógicos dentro de la institución'
            ],
            [
                'key' => 'PROYECTOS_SEXED_NOMBRE',
                'value' => 'Educación sexual y construcción de ciudadanía'
            ],
            [
                'key' => 'PROYECTOS_SEXED_DESC',
                'value' => 'Descripción de cada uno de los proyectos pedagógicos dentro de la institución'
            ],
            [
                'key' => 'PROYECTOS_PAZ_NOMBRE',
                'value' => 'Educación para el ejercicio de los derechos humanos y la paz, y educación en competencias ciudadanas'
            ],
            [
                'key' => 'PROYECTOS_PAZ_DESC',
                'value' => 'Descripción de cada uno de los proyectos pedagógicos dentro de la institución'
            ],
            [
                'key' => 'PROYECTOS_AMBIENTE_NOMBRE',
                'value' => 'Educación en responsabilidad ambiental y gestión del riesgo, y educación en movilidad'
            ],
            [
                'key' => 'PROYECTOS_AMBIENTE_DESC',
                'value' => 'Descripción de cada uno de los proyectos pedagógicos dentro de la institución'
            ],
            [
                'key' => 'PROYECTOS_FINANZAS_NOMBRE',
                'value' => 'Educación económica y financiera, y educación en emprendimiento'
            ],
            [
                'key' => 'PROYECTOS_FINANZAS_DESC',
                'value' => 'Descripción de cada uno de los proyectos pedagógicos dentro de la institución'
            ]
            /* ,
            [
                'key' => '',
                'value' => ''
            ] */
        ];

        foreach ($settings as $setting) {
            Setting::create($setting);
        }
    }
}