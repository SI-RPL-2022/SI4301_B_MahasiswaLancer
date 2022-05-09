<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    return view('LandingPage');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Mahasiswa*/
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/biodata', [App\Http\Controllers\BiodataMHSController::class, 'index'])->name('biodata');
    Route::get('/statuspekerjaanMHS', [App\Http\Controllers\StatusPekerjaanMHSController::class, 'index'])->name('statusPekerjaan');  
    
});

/*Client*/
Route::middleware(['auth', 'role:client'])->group(function () {
    
});