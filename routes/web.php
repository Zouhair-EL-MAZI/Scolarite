<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/requests", [AdminController::class, 'index'])->name('requests.index');
Route::get("/requests/{request}", [AdminController::class, 'show'])->name('requests.show');
