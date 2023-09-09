<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/daftar', function () {
    return view('daftar');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/saran-dan-kritik', function () {
    return view('saran_dan_kritik');
});

Route::prefix('/dashboard')->group(function () {
    route::get('login', function () {
        return view('dashboard.login');
    });

    route::get('', function () {
        return view('dashboard.index');
    });
    route::get('data-obat', function () {
        return view('dashboard.data-obat');
    });
    route::get('data-obat-masuk', function () {
        return view('dashboard.data-obat-masuk');
    });
    route::get('input-obat-masuk', function () {
        return view('dashboard.input-obat-masuk');
    });
    route::get('laporan', function () {
        return view('dashboard.laporan');
    });
    route::get('manajemen-user', function () {
        return view('dashboard.manajemen-user');
    });
});

Route::prefix('/kasir')->group(function () {
    Route::get('/login', function () {
        return view('kasir.login');
    });
    Route::get('/', function () {
        return view('kasir.index');
    });
    Route::get('/pembelian', function () {
        return view('kasir.pembelian');
    });
    Route::get('/transaksi', function () {
        return view('kasir.transaksi');
    });
    Route::get('/pembayaran', function () {
        return view('kasir.pembayaran');
    });
});

