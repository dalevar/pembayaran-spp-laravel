<?php

namespace Database\Seeders;

use App\Models\Major;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studentsByMajor = [
            'Rekayasa Perangkat Lunak' => [
                ['id' => 1, 'student_id' => '2024 R 001', 'name' => 'Ahmad Syahputra', 'address' => 'Jl. Veteran No. 10', 'gender' => 'L', 'parents' => '081234567890'],
                ['id' => 2, 'student_id' => '2024 R 002', 'name' => 'Budi Santoso', 'address' => 'Jl. Ahmad Yani No. 15', 'gender' => 'L', 'parents' => '081345678901'],
                ['id' => 3, 'student_id' => '2024 R 003', 'name' => 'Citra Ayu', 'address' => 'Jl. Kuripan No. 12', 'gender' => 'P', 'parents' => '082156789012'],
                ['id' => 4, 'student_id' => '2024 R 004', 'name' => 'Deni Ramdani', 'address' => 'Jl. Sutoyo S. No. 20', 'gender' => 'L', 'parents' => '081267890123'],
                ['id' => 5, 'student_id' => '2024 R 005', 'name' => 'Indira Putri', 'address' => 'Jl. Sutoyo S. No. 12', 'gender' => 'P', 'parents' => '081267890124'],
            ],
            'Desain Komunikasi Visual' => [
                ['id' => 6, 'student_id' => '2024 D 001', 'name' => 'Fritzy Rosmerian', 'address' => 'Jl. Sutoyo S. No. 01', 'gender' => 'P', 'parents' => '081267891124'],
                ['id' => 7, 'student_id' => '2024 D 002', 'name' => 'Aurhel Alana', 'address' => 'Jl. Sutoyo S. No. 21', 'gender' => 'P', 'parents' => '081267891133'],
                ['id' => 8, 'student_id' => '2024 D 003', 'name' => 'Evi Rahmawati', 'address' => 'Jl. Adhyaksa No. 30', 'gender' => 'P', 'parents' => '083178901234'],
                ['id' => 9, 'student_id' => '2024 D 004', 'name' => 'Fajar Iskandar', 'address' => 'Jl. A. Yani No. 25', 'gender' => 'L', 'parents' => '081289012345'],
                ['id' => 10, 'student_id' => '2024 D 005', 'name' => 'Hadi Suryawan', 'address' => 'Jl. Pramuka No. 22', 'gender' => 'L', 'parents' => '081301234567'],
            ],
            'Tata Kecantikan Kulit dan Rambut' => [
                ['id' => 11, 'student_id' => '2024 K 001', 'name' => 'Gita Febriani', 'address' => 'Jl. Kamboja No. 40', 'gender' => 'P', 'parents' => '085290123456'],
                ['id' => 12, 'student_id' => '2024 K 002', 'name' => 'Reva Fidela', 'address' => 'Jl. Kamboja No. 01', 'gender' => 'P', 'parents' => '085291123457'],
                ['id' => 13, 'student_id' => '2024 K 003', 'name' => 'Mutiara Azzahra', 'address' => 'Jl. Kamboja No. 11', 'gender' => 'P', 'parents' => '085291223455'],
                ['id' => 14, 'student_id' => '2024 K 004', 'name' => 'Ika Septiani', 'address' => 'Jl. Gatot Subroto No. 33', 'gender' => 'P', 'parents' => '085312345678'],
                ['id' => 15, 'student_id' => '2024 K 005', 'name' => 'Kartini Dewi', 'address' => 'Jl. Lambung Mangkurat No. 19', 'gender' => 'P', 'parents' => '082234567890'],
            ],
            'Farmasi Klinis dan Komunitas' => [
                ['id' => 16, 'student_id' => '2024 F 001', 'name' => 'Joko Prasetyo', 'address' => 'Jl. Pelita No. 44', 'gender' => 'L', 'parents' => '081223456789'],
                ['id' => 17, 'student_id' => '2024 F 002', 'name' => 'Maya Anggraeni', 'address' => 'Jl. S. Parman No. 18', 'gender' => 'P', 'parents' => '081256789012'],
                ['id' => 18, 'student_id' => '2024 F 003', 'name' => 'Nanda Putra', 'address' => 'Jl. Antasari No. 50', 'gender' => 'L', 'parents' => '082167890123'],
                ['id' => 19, 'student_id' => '2024 F 004', 'name' => 'Putri Amelia', 'address' => 'Jl. Sutoyo No. 8', 'gender' => 'P', 'parents' => '082289012345'],
                ['id' => 20, 'student_id' => '2024 F 005', 'name' => 'Qori Rizky', 'address' => 'Jl. Manggis No. 23', 'gender' => 'L', 'parents' => '081290123456'],
            ]
        ];

        $year = 2024;

        // Loop through each major and add students
        foreach ($studentsByMajor as $majorName => $students) {
            $major = Major::where('name', $majorName)->first();

            // Check if the major exists
            if ($major) {
                foreach ($students as $studentData) {
                    Student::create(array_merge($studentData, [
                        'year' => $year,
                        'major_id' => $major->id
                    ]));
                }
            } else {
                echo "Major $majorName not found.\n";
            }
        }
    }
}
