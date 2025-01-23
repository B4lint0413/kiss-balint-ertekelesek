<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'id' => 1,
                'name' => 'Nagy László',
                'class' => '13_SZFT3',
                'birth' => '2005-01-01',
            ],
            [
                'id' => 2,
                'name' => 'Zobor Barnabás',
                'class' => '11_SZFT2',
                'birth' => '2007-01-01',
            ],
            [
                'id' => 3,
                'name' => 'Kovács Petra',
                'class' => '12_SZFT1',
                'birth' => '2006-03-15',
            ],
            [
                'id' => 4,
                'name' => 'Szabó Márk',
                'class' => '10_PROG1',
                'birth' => '2007-06-10',
            ],
            [
                'id' => 5,
                'name' => 'Tóth Anna',
                'class' => '11_SZFT3',
                'birth' => '2006-11-25',
            ],
            [
                'id' => 6,
                'name' => 'Nemes Lívia',
                'class' => '13_SZFT1',
                'birth' => '2005-02-18',
            ],
            [
                'id' => 7,
                'name' => 'Hegedűs Tamás',
                'class' => '12_SZFT3',
                'birth' => '2006-08-12',
            ],
            [
                'id' => 8,
                'name' => 'Balogh Zita',
                'class' => '10_PROG2',
                'birth' => '2007-04-09',
            ],
            [
                'id' => 9,
                'name' => 'Horváth Krisztián',
                'class' => '11_SZFT2',
                'birth' => '2006-05-20',
            ],
            [
                'id' => 10,
                'name' => 'Varga Eszter',
                'class' => '13_SZFT2',
                'birth' => '2005-09-30',
            ],
            [
                'id' => 11,
                'name' => 'Fekete János',
                'class' => '10_PROG3',
                'birth' => '2007-12-01',
            ],
            [
                'id' => 12,
                'name' => 'Papp Dóra',
                'class' => '12_SZFT2',
                'birth' => '2006-07-15',
            ],
            [
                'id' => 13,
                'name' => 'Márton Levente',
                'class' => '11_SZFT1',
                'birth' => '2006-03-03',
            ],
            [
                'id' => 14,
                'name' => 'Simon Enikő',
                'class' => '13_SZFT3',
                'birth' => '2005-01-27',
            ],
            [
                'id' => 15,
                'name' => 'Molnár Kitti',
                'class' => '12_SZFT1',
                'birth' => '2006-10-05',
            ],
            [
                'id' => 16,
                'name' => 'Kiss Norbert',
                'class' => '10_PROG2',
                'birth' => '2007-06-21',
            ],
            [
                'id' => 17,
                'name' => 'Vass Regina',
                'class' => '11_SZFT3',
                'birth' => '2006-11-14',
            ],
            [
                'id' => 18,
                'name' => 'Szilágyi Ákos',
                'class' => '13_SZFT2',
                'birth' => '2005-02-02',
            ],
            [
                'id' => 19,
                'name' => 'Takács Gábor',
                'class' => '12_SZFT3',
                'birth' => '2006-09-12',
            ],
            [
                'id' => 20,
                'name' => 'Lukács Virág',
                'class' => '10_PROG1',
                'birth' => '2007-03-18',
            ],
        ]);
    }
}
