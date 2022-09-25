<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;

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
    return view('welcome');
});

Route::get('/home',[PortoController::class,'index']);


Route::get('web/beranda',[DinamisController::class,'beranda']);
Route::get('web/profil',[DinamisController::class,'profil']);
Route::get('web/kontak',[DinamisController::class,'kontak']);