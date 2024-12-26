<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::create([
            'Name' => 'Hieu Nguyen',
            'Age' => 20,
            'Address' => 'Ha Noi',
            'Score' => 3.04,
        ]);

        Student::create([
            'Name' => 'Minh Tran',
            'Age' => 22,
            'Address' => 'Da Nang',
            'Score' => 3.90,
        ]);

        Student::create([
            'Name' => 'Pham',
            'Age' => 19,
            'Address' => 'Ho Chi Minh City',
            'Score' => 2.85,
        ]);
    }
}
