<?php

namespace Database\Factories;

use App\Models\Subjects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Subjects>
 */
class SubjectsFactory extends Factory
{


    public function definition(): array
    {
        return [
            'mapel' => fake()->unique()->randomElement([
                'Matematika',
                'Bahasa Indonesia',
                'Bahasa Inggris',
                'Pemrograman Web dan Perangkat Bergerak',
                'Basis Data',
                'Pemodelan Perangkat Lunak',
                'Desain Komunikasi Visual',
                'Animasi 2D dan 3D',
                'Teknik Komputer dan Jaringan',
                'Pendidikan Agama Islam',
                'Pendidikan Pancasila',
                'Sejarah Indonesia',
                'Pendidikan Jasmani dan Kesehatan',
                'Seni Budaya',
                'Projek Kreatif dan Kewirausahaan',
                'Fisika Terapan',
                'Kimia Terapan',
                'Sistem Operasi',
                'Keamanan Jaringan',
                'Kewirausahaan Digital',
            ]),
        ];
    }
}
