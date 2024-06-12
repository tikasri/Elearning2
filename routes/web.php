<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;






// routing profil




// Route untuk menampilkan form tambah student


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('admin/student/create', [StudentController::class, 'create']);
    Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/course', [CourseController::class, 'index']);


// ROute untuk mengirim data student baru
Route::post('admin/student/store', [StudentController::class, 'store']);

// Route untuk menampilkan halaman edit
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit']);

// Route untuk menyimpan hasil update student
Route::put('admin/student/update/{id}', [StudentController::class, 'update']);

// Route untuk menghapus student
Route::delete('admin/student/delete/{id}', [StudentController::class, 'destroy']);
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
