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
Route::resource('/data-perangkat-jaringan', PerangkatJar::class);
Route::resource('/data-nvr-cctv', NvrCctv::class);
Route::resource('/data-cctv-pemko', CctvPemko::class);
Route::resource('/data-access-point', AccessPoint::class);
