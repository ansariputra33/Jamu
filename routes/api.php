<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\DesaController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/desa', [DesaController::class, 'index']);
Route::post('/desa/upload', [DesaController::class, 'upload']);
Route::post('/desa/simpan', [DesaController::class, 'store']);
Route::get('/desa/edit/{desa}', [DesaController::class, 'edit']);
Route::put('/desa/update/{desa}', [DesaController::class, 'update']);
Route::delete('/desa/delete/{desa}', [DesaController::class, 'destroy']);