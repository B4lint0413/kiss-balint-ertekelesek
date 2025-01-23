<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subjects')->insert([
            [
                'id' => 1,
                'name' => 'Backend programozás',
                'teacher' => 'Zobor Soma',
            ],
            [
                'id' => 2,
                'name' => 'Frontend programozás',
                'teacher' => 'Csatár Dóra',
            ],
            [
                'id' => 3,
                'name' => 'Webprogramozás',
                'teacher' => 'Takács Dorka',
            ],
            [
                'id' => 4,
                'name' => 'Asztali alkalmazások fejlesztése',
                'teacher' => 'Fodor György',
            ],
            [
                'id' => 5,
                'name' => 'Adatbázis',
                'teacher' => 'Kiss Gergő',
            ],
            [
                'id' => 6,
                'name' => 'Szoftvertesztelés',
                'teacher' => 'Varga Andor',
            ],
            [
                'id' => 7,
                'name' => 'IKT Projektmunka',
                'teacher' => 'Papp László',
            ],
            [
                'id' => 8,
                'name' => 'Docker',
                'teacher' => 'Szabó Ágnes',
            ],
        ]);
    }
}
