<?php

namespace Database\Factories;

use App\Models\Link;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Link::class;

    public function definition(): array
    {
        return [
            'student_id' => Student::factory(),
            'link' => $this->faker->url(),
        ];
    }
}
