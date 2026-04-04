<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/requests", [AdminController::class, 'index'])->name('admin.requests.index');
Route::get("/admin/requests/{request}", [AdminController::class, 'show'])->name('admin.requests.show');
