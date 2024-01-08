<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;  
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
    return view('admin.dashboard',[
        "title" => "Dashboard"
    ]);
});
Route::resource('/pengguna', AdminController::class);
Route::resource('/jadwal', JadwalController::class);
