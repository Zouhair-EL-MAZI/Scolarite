<?php
use App\Http\Controllers\FORequestsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginStudentsController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginStudentsController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('requests', FORequestsController::class)->only(['index', 'create', 'store'])->middleware('auth.student');
Route::get("/admin/requests", [AdminController::class, 'index'])->name('admin.requests.index')->middleware('auth.admin');
Route::get("/admin/requests/{request}", [AdminController::class, 'show'])->name('admin.requests.show')->middleware('auth.admin');


// Student login
Route::get('/login', [LoginStudentsController::class, 'loginForm'])->name('students.login')->middleware('guest:student');
Route::post('/login', [LoginStudentsController::class, 'login'])->name('students.login.submit')->middleware('guest:student');
Route::post('/logout', [LoginStudentsController::class, 'logout'])->name('students.logout')->middleware('auth.student');

// Admin login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login')->middleware('guest:admin');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.login.submit')->middleware('guest:admin');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('auth.admin');

