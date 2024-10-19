<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetworkStudent extends Model
{
    protected $table = 'social_network_students';
    use HasFactory;

    protected $fillable = [
        'social_network_id',
        'student_id',
        'username',
    ];
}
