<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // use App\Models\Course;
        // Course::factory(30)->create();
        $this->call(UserSeeder::class);
        $this->call(TrainorSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(TraineeSeeder::class);
    }
}
