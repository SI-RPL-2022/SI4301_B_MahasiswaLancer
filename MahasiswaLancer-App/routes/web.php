<?php

use App\Http\Controllers\JasaController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Routing\RouteGroup;
use Illuminate\Http\Request;

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
})->name('landingpage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Mahasiswa*/
Route::middleware(['auth', 'role:mahasiswa'])->group(function () {
    Route::get('/dashboardMHS', function () {
        return view('Mahasiswa.dashboardmhs');
    })->name('dashboardMHS');
    Route::get('/pesanan', function () {
        return view('Mahasiswa.pesanan');
    })->name('pesanan');

    Route::prefix('jasa')->group(function () {
        Route::get('/', [App\Http\Controllers\JasaController::class, 'index'])->name('jasa');
        Route::get('/tambah', [App\Http\Controllers\JasaController::class, 'create'])->name('tambahjasa');
        Route::post('/tambah/post', [App\Http\Controllers\JasaController::class, 'store'])->name('tambahjasapost');
        Route::get('/edit/{$id}', [App\Http\Controllers\JasaController::class, 'edit'])->name('editjasa');
        Route::post('/edit/{$id}/update', [App\Http\Controllers\JasaController::class, 'update'])->name('editjasapost');
        Route::post('/hapus/{$id}', [App\Http\Controllers\JasaController::class, 'destroy'])->name('hapusjasa');
    });
   

    Route::get('/biodata', [App\Http\Controllers\BiodataMHSController::class, 'index'])->name('biodata');
    Route::get('/statuspekerjaanMHS', [App\Http\Controllers\StatusPekerjaanMHSController::class, 'index'])->name('statusPekerjaan');  
    
});

/*Client*/
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/status', function(){return view('Client.StatusPengerjaan');})->name('statuspengerjaan');
});

Route::get('tes', function(){
    return view('Client.StatusPengerjaan');
})->name('tes');

Route::post('dump', function (Request $request) {
    dd($request);
});