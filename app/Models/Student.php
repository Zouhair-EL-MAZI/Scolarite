<?php

namespace App\Models;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
>>>>>>> eed0da99bd6a1a6f81ac36d8faf45518fa809026

class Student extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'apogee_number',
        'date_of_birth',
        'department',
        'first_name',
        'last_name',
        'email',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    // This model is used for student authentication and inherits Authenticatable.
}
