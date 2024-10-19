<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'source_link' => $this->faker->url(), // Tasodifiy source_link (URL)
            'demo_link' => $this->faker->url(), // Tasodifiy demo_link (URL)
        ];
    }
}
