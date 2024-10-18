<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'lesson_id',
        'hard_skill_id',
        'soft_skill_id',
        'project_id',
        'experience_id',
    ];
}
