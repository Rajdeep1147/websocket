<?php

namespace Database\Seeders;

use Modules\Student\Database\Seeders\StudentDatabaseSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            EmployeeSeeder::class,
            StudentSeeder::class,

        ]);

    }
}
