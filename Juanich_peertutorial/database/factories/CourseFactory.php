<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use App\Models\Trainor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trainor_id' => fake()->randomElement(Trainor::pluck('id')),
            'title' => implode(' ', fake()->words()),
            'description' => implode(' ', fake()->sentences()),
        ];
    }
}
