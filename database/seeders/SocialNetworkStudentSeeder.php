<?php

namespace Database\Seeders;

use App\Models\SocialNetwork;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialNetworkStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = Student::all();
        $socialNetworks = SocialNetwork::all();

        foreach ($students as $student) {
            $socialNetworkIds = $socialNetworks->random(rand(1, 3))->pluck('id')->toArray();

            foreach ($socialNetworkIds as $socialNetworkId) {
                $student->socialNetworks()->attach($socialNetworkId, [
                    'username' => 'user_' . $student->id . '_' . $socialNetworkId,
                ]);
            }
        }
    }

}
