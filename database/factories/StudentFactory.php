<?php

namespace Database\Factories;


use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake() -> name(),
            'nis' => fake()->randomNumber(5,false),
            // 'classroom' => fake() -> randomElement(['11PPLG1','11PPLG2','11PPLG3']),
            'classrooms' => classroom::factory(),
            'keadaan' => fake() -> randomElement(['Active','InActive']),
        ];
    }
}
