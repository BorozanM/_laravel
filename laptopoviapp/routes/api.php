<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaptopController;
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
Route::post('/registrujse',[AuthController::class,'register']);
Route::post('/ulogujse',[AuthController::class,'login']);




Route::get('/laptopovi',[LaptopController::class,'index']);
Route::get('/laptopovi/{id}',[LaptopController::class,'show']);



Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/odjava',[AuthController::class,'logout']);
    Route::delete('/laptopovi/{id}',[LaptopController::class,'destroy']);

    Route::post('/laptopovi',[LaptopController::class,'store']);
    Route::put('/laptopovi/{id}',[LaptopController::class,'update']);
});
