<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Rector',
                'description' => 'Maxima autoridad dentro del colegio, con todos los permisos de la pagina web',
            ],
            [
                'name' => 'Administrador',
                'description' => 'Desarrollador o tester, posee todos los permisos de la pagina web',
            ],
            [
                'name' => 'Profesional de apoyo',
                'description' => 'Personal administrativo del colagio, posee todos los permisos de la pagina web',
            ],
            [
                'name' => 'Profesor',
                'description' => 'Personal docente del colagio, posee algunos permisos de la pagina web',
            ]/* ,
            [
                'name' => '',
                'description' => '',
            ] */	
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
