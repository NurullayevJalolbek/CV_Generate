<?php

namespace Database\Seeders;

use App\Models\Lessons;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lessons::factory(10)->create();
    }
}
