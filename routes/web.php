<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WalimuridController;
use App\Http\Controllers\PerusahaanController;

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

Route::get('/www.guestbooktb.com', function() {
	return view('home');
})->name('index');
 
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
Route::group(['prefix'=>'admin','middleware'=>['auth:admin']], function() {
	Route::get('/Dashboard', [HomeController::class,'admin'])->name('dashboard');
    Route::get('/admin2',[AdminController::class,'index'])->name('data.admin');
    Route::get('/dataWalimurid',[WalimuridController::class,'index'])->name('data.walimurid');
    Route::get('/dataPerusahaan',[PerusahaanController::class,'index'])->name('data.perusahaan');




    // CRUD DATA ADMIN . . . . . .
    


// Route::group(['middleware' => 'auth'], function () {
 
//     Route::get('home', [HomeController::class, 'index'])->name('home');
//     Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});

Route::group(['prefix'=>'tamu','middleware'=>['auth:tamu']], function() {
	Route::get('/tamu', [HomeController::class,'tamu'])->name('tamu');

});