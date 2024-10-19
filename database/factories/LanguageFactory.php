<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(), // Tasodifiy til nomi (string)
            'level' => $this->faker->randomElement(['A1', 'A2', 'B1', 'B2', 'C1', 'C2']), // Tasodifiy daraja (enum)
        ];
    }
}
