<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => \App\Models\Student::factory(), // Tasodifiy student bilan bog'lash
            'name' => $this->faker->sentence(3), // Tasodifiy nom (3 so'zdan iborat)
            'description' => $this->faker->paragraph(), // Tasodifiy description (matn)
            'start_date' => $this->faker->dateTimeBetween('-5 years', 'now'), // Tasodifiy start_date
            'end_date' => $this->faker->optional()->dateTimeBetween('now', '+2 years'), // Tasodifiy end_date (bo'sh bo'lishi ham mumkin)
        ];
    }
}
