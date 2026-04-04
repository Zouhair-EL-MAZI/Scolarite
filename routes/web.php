<?php

use App\Http\Controllers\FORequestsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('requests', FORequestsController::class);