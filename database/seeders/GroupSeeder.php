<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Sexto',
                'professor_id' => '9',
            ],
            [
                'name' => 'Septimo',
                'professor_id' => '5',
            ],
            [
                'name' => 'Octavo',
                'professor_id' => '6',
            ],
            [
                'name' => 'Noveno',
                'professor_id' => '12',
            ],
            [
                'name' => 'Décimo',
                'professor_id' => '4',
            ],
            [
                'name' => 'Undecimo',
                'professor_id' => '8',
            ]
            /* ,
            [
                'name' => '',
                'professor_id' => '',
            ] */
        ];

        foreach ($groups as $group) {
            Group::create($group);
        }
    }
}
