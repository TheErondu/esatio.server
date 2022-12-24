<?php

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


Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::group(["middleware" => ["auth:sanctum"]], function(){
    Route::get('notifications/push', [App\Http\Controllers\WebNotificationController::class, 'index'])->name('notifications.push.index');
    Route::get('artisan', [App\Http\Controllers\ArtisanController::class, 'index'])->name('artisan.index');
    Route::get('user/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
 });
