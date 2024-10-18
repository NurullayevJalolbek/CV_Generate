<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'nt_id' => $this->faker->unique()->numberBetween(1000, 9999),
            'photo' => $this->faker->imageUrl(640, 480, 'people'),
            'profession' => $this->faker->word(),
            'phone' => $this->faker->phoneNumber(),
            'biography' => $this->faker->paragraph(),
        ];
    }
}
