<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/** 
 * Method HTTP:
 * 1. Get = menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
*/

// routes untuk menampilkan teks
Route::get('/salam/{nama}', function($nama){
    return "Assalaamu'alaikum $nama";
});

Route::get('admin/dashboard',[DashboardController::class, 'index']);