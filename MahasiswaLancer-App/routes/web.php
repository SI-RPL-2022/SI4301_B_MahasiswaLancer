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

Route::get('/', [App\Http\Controllers\JasaController::class, 'landingpage'])->name('landingpage'); 

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
        Route::get('/{id}', [App\Http\Controllers\JasaController::class, 'edit'])->name('editjasa');
        Route::put('/edit', [App\Http\Controllers\JasaController::class, 'update'])->name('editjasapost');
        Route::delete('/hapus', [App\Http\Controllers\JasaController::class, 'destroy'])->name('hapusjasa');
    });
   
    Route::prefix('biodata')->group(function () {
        Route::get('/', [App\Http\Controllers\BiodataMHSController::class, 'index'])->name('biodata');
        Route::put('/update', [App\Http\Controllers\BiodataMHSController::class, 'update'])->name('updatebiodata');
    });

    Route::get('/statuspekerjaanMHS', [App\Http\Controllers\StatusPekerjaanMHSController::class, 'index'])->name('statusPekerjaan');  
    
});

/*Client*/
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/status', [App\Http\Controllers\TransaksiController::class, 'index'])->name('statuspengerjaan');
    Route::get('/Jasa/{id}/konfirmasi-pesanan', [App\Http\Controllers\TransaksiController::class, 'create'])->name('konfirmasipesanan');
    Route::post('/Jasa/{id}/konfirmasi-pesanan/post', [App\Http\Controllers\TransaksiController::class, 'store'])->name('konfirmasipesananpost');
    Route::get('/pesanan-berhasil/{id}', [App\Http\Controllers\TransaksiController::class, 'viewberhasilpesan'])->name('berhasilpesan');

    Route::post('/action/batalkan', [App\Http\Controllers\TransaksiController::class, 'batalkan'])->name('batalkan');
    Route::post('/action/terima', [App\Http\Controllers\TransaksiController::class, 'terima'])->name('terima');
    Route::post('/action/revisi', [App\Http\Controllers\TransaksiController::class, 'revisi'])->name('revisi');

    Route::prefix('pembayaran')->group(function () {
        Route::get('/{id}', [App\Http\Controllers\TransaksiController::class, 'pembayaran'])->name('pembayaran');
        Route::get('/{id}/pilih-metode', [App\Http\Controllers\TransaksiController::class, 'metode_bayar'])->name('metodepembayaran');
        Route::post('/action/bayar', [App\Http\Controllers\TransaksiController::class, 'bayar'])->name('bayar');
        Route::get('/{id}/berhasil', [App\Http\Controllers\TransaksiController::class, 'bayar_berhasil'])->name('pembayaranberhasil');
    });
});

Route::get('/Jasa/{id}', [App\Http\Controllers\JasaController::class, 'show'])->name('detailjasa');

Route::get('/tes_view', function(){
    return view('Client.konfirmasiPesanan');
})->name('tes_view');

// Route::get('tes', function(){
//     return view('Client.pembayaranBerhasil');
// })->name('tes');

// Route::post('dump', function (Request $request) {
//     dd($request);
// });

// Route::get('dump', function () {
//     return view('dump');
// });

// Route::get('newdump', function () {
//     return view('newdump');
// });
