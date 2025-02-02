<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('grades')->insert([
            [
                'id' => 1,
                'grade' => '5',
                'topic' => 'Egyszerű kapcsolatok',
                'type' => 'Dolgozat',
                'weight' => 1.0,
                'student_id' => 1,
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'grade' => '4',
                'topic' => 'Pinia',
                'type' => 'Beszámoló',
                'weight' => 1.5,
                'student_id' => 1,
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'grade' => '5',
                'topic' => 'JavaScript alapok',
                'type' => 'Dolgozat',
                'weight' => 1.0,
                'student_id' => 2,
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'grade' => '3',
                'topic' => 'Programozási tételek',
                'type' => 'Házi feladat',
                'weight' => 0.5,
                'student_id' => 2,
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'grade' => '4',
                'topic' => 'Adatbázis tervezés',
                'type' => 'Dolgozat',
                'weight' => 1.0,
                'student_id' => 3,
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'grade' => '5',
                'topic' => 'TDD',
                'type' => 'Gyakorlati feladat',
                'weight' => 1.0,
                'student_id' => 4,
                'subject_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'grade' => '2',
                'topic' => 'Figma terv',
                'type' => 'Projekt',
                'weight' => 2.0,
                'student_id' => 5,
                'subject_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'grade' => '4',
                'topic' => 'Docker compose',
                'type' => 'Teszt',
                'weight' => 1.0,
                'student_id' => 6,
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'grade' => '3',
                'topic' => 'SQL alapok',
                'type' => 'Beszámoló',
                'weight' => 1.0,
                'student_id' => 3,
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 10,
                'grade' => '5',
                'topic' => 'REST API',
                'type' => 'Projekt',
                'weight' => 2.0,
                'student_id' => 7,
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 11,
                'grade' => '4',
                'topic' => 'CSS Grid',
                'type' => 'Dolgozat',
                'weight' => 1.0,
                'student_id' => 8,
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 12,
                'grade' => '2',
                'topic' => 'Async programozás',
                'type' => 'Dolgozat',
                'weight' => 1.0,
                'student_id' => 9,
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 13,
                'grade' => '5',
                'topic' => 'Flexbox',
                'type' => 'Házi feladat',
                'weight' => 0.5,
                'student_id' => 10,
                'subject_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 14,
                'grade' => '4',
                'topic' => 'Docker compose',
                'type' => 'Teszt',
                'weight' => 1.0,
                'student_id' => 11,
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 15,
                'grade' => '3',
                'topic' => 'N:M kapcsolatok',
                'type' => 'Beszámoló',
                'weight' => 1.5,
                'student_id' => 12,
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 16,
                'grade' => '5',
                'topic' => 'REST API',
                'type' => 'Projekt',
                'weight' => 1.5,
                'student_id' => 13,
                'subject_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 17,
                'grade' => '2',
                'topic' => 'CSS Animációk',
                'type' => 'Projekt',
                'weight' => 2.0,
                'student_id' => 14,
                'subject_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 18,
                'grade' => '4',
                'topic' => 'N:M kapcsolatok',
                'type' => 'Beszámoló',
                'weight' => 1.5,
                'student_id' => 15,
                'subject_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 19,
                'grade' => '3',
                'topic' => 'Docker CLI',
                'type' => 'Órai munka',
                'weight' => 0.5,
                'student_id' => 16,
                'subject_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 20,
                'grade' => '5',
                'topic' => 'Veremek és sorok',
                'type' => 'Házi feladat',
                'weight' => 0.8,
                'student_id' => 17,
                'subject_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
