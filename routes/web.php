<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataServer;
use App\Http\Controllers\PerangkatJar;
use App\Http\Controllers\NvrCctv;
use App\Http\Controllers\CctvPemko;
use App\Http\Controllers\AccessPoint;

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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
});

//route resource
Route::resource('/data-server', DataServer::class);
Route::get('getServer/{id}', [DataServer::class, 'getAPI']);
Route::post('ubahData', [DataServer::class, 'ubah'])->name('Ubah');

Route::resource('/data-perangkat-jaringan', PerangkatJar::class);
Route::get('getJar/{id}', [PerangkatJar::class, 'getAPI']);
Route::post('ubahJar', [PerangkatJar::class, 'ubah'])->name('UbahJar');

Route::resource('/data-nvr-cctv', NvrCctv::class);
Route::get('getNvr/{id}', [NvrCctv::class, 'getAPI']);
Route::post('ubahNvr', [NvrCctv::class, 'ubah'])->name('UbahNvr');

Route::resource('/data-cctv-pemko', CctvPemko::class);
Route::get('getCctv/{id}', [CctvPemko::class, 'getAPI']);
Route::post('ubahCctv', [CctvPemko::class, 'ubah'])->name('UbahCctv');

Route::resource('/data-access-point', AccessPoint::class);
Route::get('getAp/{id}', [AccessPoint::class, 'getAPI']);
Route::post('ubahAp', [AccessPoint::class, 'ubah'])->name('UbahAp');
