<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_names' => $this->faker->firstName,
            'last_names' => $this->faker->lastName,
            'phone' => $this->faker->unique()->numerify('##########'),
            'document_type' => $this->faker->randomElement(['C.C', 'T.I', 'R.C', 'C.E']),
            'document_number' => $this->faker->unique()->numerify('##########'),
            'date_of_birth' => $this->faker->date,
            'place_of_birth' => $this->faker->city,
            'father_name' => $this->faker->name('male'),
            'father_document_number' => $this->faker->unique()->numerify('##########'),
            'father_phone' => $this->faker->unique()->numerify('##########'),
            'father_occupation' => $this->faker->jobTitle,
            'mother_name' => $this->faker->name('female'),
            'mother_document_number' => $this->faker->unique()->numerify('##########'),
            'mother_phone' => $this->faker->unique()->numerify('##########'),
            'mother_occupation' => $this->faker->jobTitle,
            'guardian_name' => $this->faker->name,
            'guardian_document_number' => $this->faker->unique()->numerify('##########'),
            'guardian_phone' => $this->faker->unique()->numerify('##########'),
            'guardian_occupation' => $this->faker->jobTitle,
            'address' => $this->faker->address,
            'healthcare_provider' => $this->faker->company,
            'blood_type' => $this->faker->randomElement(['A+', 'B+', 'AB+', 'O+','A-', 'B-', 'AB-', 'O-']),
            'medical_conditions' => $this->faker->sentence,
            'allergies' => $this->faker->sentence,
            'medications' => $this->faker->sentence,
            'ethnic_group' => $this->faker->randomElement(['Afro', 'Indigena', 'ROM', null]),
            'status' => $this->faker->randomElement(['activo', 'inactivo']),
            'group_id' => rand(1, 6),
        ];
    }
}
