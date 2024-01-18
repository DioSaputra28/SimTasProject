<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


// Route::get('/register',[RegisterController::class,'index']);
// Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']);