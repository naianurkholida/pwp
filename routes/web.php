<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\pinjamController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard', ['active' => 'home']);
});
Route::get('/pinjam', [pinjamController::class, 'create']);
Route::post('/login', [loginController::class, 'login']);
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/pinjam', [pinjamController::class, 'store']);
Route::get('/dataPinjam', [pinjamController::class, 'index']);
Route::get('/kembali/{kode_pinjam}', [pinjamController::class, 'kembali']);
Route::patch('update/{edit_pinjam}', [pinjamController::class, 'update']);
Route::resource('edit_pinjam', '\App\Http\Controllers\pinjamController')->except('update');

// Route::get('/dataPinjam')