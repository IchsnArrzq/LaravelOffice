<?php

use App\Http\Controllers\Admin\AgamaController;
use App\Http\Controllers\Admin\BackUpController;
use App\Http\Controllers\Admin\DokumenController;
use App\Http\Controllers\Admin\GolonganController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\KeahlianController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\PendidikanController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StatusPernikahanController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware('auth')->name('admin.')->group(function () {
    Route::prefix('/setting')->group(function () {
        Route::view('/', 'admin.setting.index')->name('setting.index');
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('setting', SettingController::class);
    });
    Route::prefix('/master')->group(function () {
        Route::resource('jabatan', JabatanController::class);
        Route::resource('pegawai', PegawaiController::class);
        Route::resource('agama', AgamaController::class);
        Route::resource('dokumen', DokumenController::class);
        Route::resource('status_pernikahan', StatusPernikahanController::class);
        Route::resource('pendidikan', PendidikanController::class);
        Route::resource('golongan', GolonganController::class);
        Route::resource('keahlian', KeahlianController::class);
    });
    Route::resource('user', UserController::class);
    Route::resource('backup', BackUpController::class);
});
