<?php

use App\Models\Admin;
use App\Models\Student;
use App\Models\User;
use App\Models\Admin;
use App\Models\Student;

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    */
    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'), // default guard
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'), // default password broker
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    */
    'guards' => [
        // Guard dyal students / users
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        

        // Guard dyal students
        'student' => [
            'driver' => 'session',
            'provider' => 'students',
        ],
        // Guard dyal admins
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    */
    //gaurd ki dir lina
    'providers' => [
        // Users (students)
        'users' => [
            'driver' => 'eloquent',
            'model' => User::class,
        ],

        // Admins
        'admins' => [
            'driver' => 'eloquent',
            'model' => Admin::class, // Admin model khaso extends Authenticatable
        ],

        'students' => [
            'driver' => 'eloquent',
            'model' => Student::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Reset Settings
    |--------------------------------------------------------------------------
    */
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
        'admins' => [
            'provider' => 'admins',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    */
    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),
];