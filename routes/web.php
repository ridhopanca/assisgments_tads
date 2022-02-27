<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'storeUser'])->name('storeUser');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/forgetpassword', [ForgotPasswordController::class, 'getEmail'])->name('forgetpassword');
Route::post('/forgetpassword', [ForgotPasswordController::class, 'postEmail'])->name('forgetpassword');
Route::get('/resetpassword/{token}', [ResetPasswordController::class, 'getPassword'])->name('resetpassword');
Route::post('/resetpassword', [ResetPasswordController::class, 'updatePassword'])->name('resetpassword');
// Route::resource('fakultas', 'FakultasController');
Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
Route::get('/fakultas/create', [FakultasController::class, 'create'])->name('fakultas.create');
Route::get('/fakultas/{id}/edit', [FakultasController::class, 'edit'])->name('fakultas.edit');
Route::post('/fakultas/{id}', [FakultasController::class, 'update'])->name('fakultas.update');
Route::post('/fakultas', [FakultasController::class, 'store'])->name('fakultas.store');
Route::delete('/fakultas/{id}', [FakultasController::class, 'destroy'])->name('fakultas.destroy');
Route::get('/programstudi', [ProgramStudiController::class, 'index'])->name('programstudi.index');
Route::get('/programstudi/create', [ProgramStudiController::class, 'create'])->name('programstudi.create');
Route::get('/programstudi/{id}/edit', [ProgramStudiController::class, 'edit'])->name('programstudi.edit');
Route::get('/programstudi/{id}', [ProgramStudiController::class, 'fakultas'])->name('programstudi.fakultas');
Route::post('/programstudi/{id}', [ProgramStudiController::class, 'update'])->name('programstudi.update');
Route::post('/programstudi', [ProgramStudiController::class, 'store'])->name('programstudi.store');
Route::delete('/programstudi/{id}', [ProgramStudiController::class, 'destroy'])->name('programstudi.destroy');
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::post('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');