<?php

use App\Http\Controllers\API\AuthController;
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
Route::get('/',[\App\Http\Controllers\API\ApiController::class, 'index']);
Route::post('artisan', [\App\Http\Controllers\API\ArtisanController::class, 'run'])->name('artisan');
Route::controller(AuthController::class)->group(function(){
    Route::post('register', 'register');
    Route::post('login', 'login');
});
Route::group(["middleware" => ["auth:sanctum"]], function(){

    Route::get('user', [App\Http\Controllers\API\UserController::class, 'userInfo'])->name('userInfo');
    Route::get('user/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);

 });

