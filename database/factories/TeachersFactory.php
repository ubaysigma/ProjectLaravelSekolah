<?php

namespace Database\Factories;

use App\Models\Subjects;
use App\Models\Teachers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teachers>
 */
class TeachersFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'niy' => fake()->numberBetween(1000000000, 9999999999),
            // 'subjects' => fake()->randomElement([
            //     'Matematika',
            //     'Bahasa Indonesia',
            //     'Bahasa Inggris',
            //     'Pemrograman Web dan Perangkat Bergerak',
            //     'Basis Data',
            //     'Pemodelan Perangkat Lunak',
            //     'Desain Komunikasi Visual',
            //     'Animasi 2D dan 3D',
            //     'Teknik Komputer dan Jaringan',
            //     'Pendidikan Agama Islam',
            //     'Pendidikan Pancasila',
            //     'Sejarah Indonesia',
            //     'Pendidikan Jasmani dan Kesehatan',
            //     'Seni Budaya',
            //     'Projek Kreatif dan Kewirausahaan',
            // ]),
            'mapel' => subjects::factory(),
            'start-date' => fake()->date(),
        ];
    }
}
