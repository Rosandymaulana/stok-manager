<?php

// use App\Http\Controllers\BarangController;

use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('components.dashboard');
// });

// Route::resource('/barang_keluar', TransactionController::class);

// Route::get('/', [DashboardController::class, 'index', 'lowProduct']);

// Route::resource('/data_barang', ProductController::class);

// Route::get('/lowStok', [StockController::class, 'stok']);


// Route::get('/laporan', [LaporanController::class, 'index']);

// Route::resource('/user-profile', UserController::class);

// Route::get('/logout', function () {
//     return view('pages.users.logout');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// auth => sudah login
// guest =? tamu belum login

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// hanya bisa diakses oleh user yang belum login
// default ada di RouteServiceProvider

Route::get('upload-file', [ProductController::class, 'createForm']);
Route::post('upload-file', [ProductController::class, 'fileUpload'])->name('fileupload');

Route::get('/', [DashboardController::class, 'index', 'lowProduct']);
Route::get('/lowStok', [StockController::class, 'stok']);
Route::get('/laporan', [LaporanController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/data_barang', ProductController::class);
Route::resource('/user-profile', UserController::class);

// Route::get('/logout', function () {
//     return view('pages.users.logout');
// });
Route::group(['middleware' => 'auth'], function () {
});
