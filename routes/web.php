<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tugascontroller;
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
    return view('v_home');
});
Route::view('/infoharga','v_infoharga');
Route::view('/sewa','v_sewa');
Route::view('/rekapsewa','v_rekapsewa');
Route::view('Tugas',[TugasController::class,'index'])->name('index');
Route::get('tugas1',[TugasController::class, 'tugas1'])->name('tugas1');
Route::get('tugas2',[TugasController::class, 'tugas2'])->name('tugas2');
