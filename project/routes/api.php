<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProvedorController;
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

Route::controller(ProductosController::class)->group(function (){
    Route::get('/products', 'index');
    Route::post('/products', 'store');
    Route::put('/products/{id}', 'update');
    Route::delete('/products/{id}', 'destroy');
});

Route::controller(ProvedorController::class)->group(function (){
    Route::get('/provedor', 'index');
    Route::post('/provedor', 'store');
    Route::put('/provedor/{id}', 'update');
    Route::delete('/provedor/{id}', 'destroy');
});