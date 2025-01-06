<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AcademicYear;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicYear::create([
            'year-start' => '2022',
            'year-end' => '2023',
            'description' => '2022-2023',
            'status' => 'inactive',
        ]);
        AcademicYear::create([
            'year-start' => '2023',
            'year-end' => '2024',
            'description' => '2023-2024',
            'status' => 'inactive',
        ]);
        AcademicYear::create([
            'year-start' => '2024',
            'year-end' => '2025',
            'description' => '2024-2025',
            'status' => 'active',
        ]);
    }
}
