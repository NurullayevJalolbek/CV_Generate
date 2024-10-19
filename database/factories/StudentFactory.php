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
            'first_name' => $this->faker->firstName(), // Fake first name
            'last_name' => $this->faker->lastName(), // Fake last name
            'nt_id' => $this->faker->randomNumber(), // Fake nt_id (random number)
            'photo' => $this->faker->imageUrl(640, 480, 'people'), // Fake photo URL
            'profession' => $this->faker->jobTitle(), // Fake profession (job title)
            'phone' => $this->faker->phoneNumber(), // Fake phone number
            'biography' => implode(' ', $this->faker->words(4)), // 4 ta so'zdan iborat fake biography
        ];
    }
}
