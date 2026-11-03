<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use App\Models\Subjects;
use App\Models\Teachers;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Student::factory(10)->create();
        // Classroom::factory(20)->create();
        Classroom::factory(10)
         ->hasStudents(5)
         ->create();
        Teachers::factory(10)->create();
        Subjects::factory(10)
        ->hasTeacher(5)
        ->create();
    }
}
