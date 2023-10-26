<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\IrsController;


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
    return view('layout');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'registrationPost'])->name('registration.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('mahasiswa.dashboard');
})->name('dashboard');


Route::get('/index', function () {
    return view('mahasiswa.index');
})->name('index');

Route::get('/irs', function () {
    return view('mahasiswa.irs');
})->name('irs');

Route::get('/khs', function () {
    return view('mahasiswa.khs');
})->name('khs');

Route::get('/pkl', function () {
    return view('mahasiswa.pkl');
})->name('pkl');

Route::get('/skripsi', function () {
    return view('mahasiswa.skripsi');
})->name('skripsi');

Route::get('/edit', function () {
    return view('mahasiswa.edit');
})->name('edit');

Route::get('/dashboardDW', function () {
    return view('dosenwali.dashboardDW');
})->name('dashboardDW');

Route::get('/mahasiswa', [MahasiswaController::class,'create'])->name('mahasiswa.create');
// Route::post('/mahasiswa', [MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/mahasiswa', [MahasiswaController::class,'store'])->name('mahasiswa.store');
Route::get('/mahasiswa', [MahasiswaController::class,'index'])->name('mahasiswa.index');

Route::get('/irs', [IrsController::class, 'create'])->name('irs.create');
Route::post('/irs', [IrsController::class, 'store'])->name('irs.store');
Route::get('/irs', [IrsController::class, 'index'])->name('irs.index');
Route::get('/khs/create', 'KhsController@create')->name('khs.create');
Route::post('/khs', 'KhsController@store')->name('khs.store');
Route::get('/pkl/create', 'PklController@create')->name('pkl.create');
Route::post('/pkl', 'PklController@store')->name('pkl.store');
Route::get('/skripsi/create', 'SkripsiController@create')->name('skripsi.create');
Route::post('/skripsi', 'SkripsiController@store')->name('skripsi.store');

Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');