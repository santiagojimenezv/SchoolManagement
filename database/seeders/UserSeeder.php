<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email'=> 'odilia@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Odilia',
                'last_names'=> 'Lopez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'position'=> 'Rectora',
                'role_id'=> '1',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'mariela@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Mariela',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'position'=> 'Secretaria',
                'role_id'=> '3',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'diana@',
                'password'=> 'hola1234',
                'first_names'=> 'Diana',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'position'=> 'Psicoorientadora',
                'role_id'=> '3',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'carmenza@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Carmeza',
                'last_names'=> 'Ramirez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Emprendimiento',
                'position'=> 'Coordinadora',
                'role_id'=> '3',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'augusto@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Augusto',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Música',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'marco@emial.com',
                'password'=> 'hola1234',
                'first_names'=> 'Marco',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Educación Física',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'carlos@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Carlos',
                'last_names'=> 'Noreña',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Matematicas',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'mariluz@emial.com',
                'password'=> 'hola1234',
                'first_names'=> 'Mariluz',
                'last_names'=> 'Bermudez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Lenguaje',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'diana@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Diana',
                'last_names'=> 'Grajales',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Tecnología',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'pedro@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Pedro',
                'last_names'=> 'Hernandez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Ciencias Naturales',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'german@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'German',
                'last_names'=> 'Mendieta',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Sociales',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'dianamarcela@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Diana Marcela',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Ciencias Naturales',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'maria@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'Maria Eugenia',
                'last_names'=> 'Perez',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> 'Inglés',
                'position'=> 'Profesor',
                'role_id'=> '4',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ],
            [
                'email'=> 'admin@email.com',
                'password'=> 'hola1234',
                'first_names'=> 'admin',
                'last_names'=> 'admin',
                'document_type'=> 'C.C',
                'document_number'=> '123456789',
                'status'=> 'activo',
                'subject'=> '',
                'position'=> '',
                'role_id'=> '2',
                'message'=> 'Mensaje de parte de cada uno del personal de la institución para la comunidad educativa'
            ]/* ,
            [
                'email'=> '',
                'password'=> '',
                'first_names'=> '',
                'last_names'=> '',
                'document_type'=> '',
                'document_number'=> '',
                'status'=> '',
                'subject'=> '',
                'position'=> '',
                'role_id'=> '',
                'message'=> ''
            ] */

        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}