<?php

namespace Database\Factories;

use App\Models\SocialNetwork;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SocialNetworkStudent>
 */
class SocialNetworkStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'social_network_id' => SocialNetwork::factory(),
            'student_id' => Student::factory(),
            'username' => $this->faker->userName(),
        ];
    }
}
