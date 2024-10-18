<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoftSkill>
 */
class SoftSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'skill_name' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'level' => $this->faker->numberBetween(1, 10),
        ];
    }
}
