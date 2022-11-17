<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReligionController;

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
    $jumlahpegawai = Employee::count();
    $pegawaipria = Employee::where('jk', 'pria')->count();
    $pegawaiwanita = Employee::where('jk', 'wanita')->count();

    return view('welcome', compact('jumlahpegawai', 'pegawaipria', 'pegawaiwanita'));
})->middleware('auth');

Route::group(['middleware' => ['auth', 'hakakses:admin']], function () {
    Route::get('/pegawai', [EmployeeController::class, 'index'])->name('pegawai')->middleware('auth');
});


Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata', [EmployeeController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])->name('updatedata');
Route::get('/deletedata/{id}', [EmployeeController::class, 'deletedata'])->name('deletedata');

// Export PDF
Route::get('/exportpdf', [EmployeeController::class, 'exportpdf'])->name('exportpdf');

// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');

// loginproses
Route::post('/loginproses', [loginController::class, 'loginproses'])->name('loginproses');

// Register
Route::get('/register', [LoginController::class, 'register'])->name('register');

// Regis Users
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Data Religions
Route::get('/datareligion', [ReligionController::class, 'index'])->name('datareligion')->middleware('auth');

// Add Religions
Route::get('/tambahagama', [ReligionController::class, 'create'])->name('tambahagama');

Route::post('/insertdatareligion', [ReligionController::class, 'store'])->name('insertdatareligion');
