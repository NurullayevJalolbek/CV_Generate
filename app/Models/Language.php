<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'language_student');
    }

}
