<?php

use App\Http\Controllers\Api\PegawaiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/admin')->name('admin.')->group(function(){
    Route::prefix('/pegawai')->name('pegawai.')->group(function(){
        Route::post('photo/{id}',[PegawaiController::class,'photo']);
        Route::get('photo/delete/{id}',[PegawaiController::class,'photodelete']);
        Route::get('/riwayatpendidikan/{id}',[PegawaiController::class,'riwayatpendidikanindex']);
        Route::post('/riwayatpendidikan/store/{id}', [PegawaiController::class, 'riwayatpendidikanstore']);
        Route::get('riwayatpendidikan/delete/{id}',[PegawaiController::class, 'riwayatpendidikandelete']);
    });
});