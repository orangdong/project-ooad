<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/', [GuestController::class, 'index']);
Route::get('/forum', [GuestController::class, 'forum']);
Route::get('/storepage',[GuestController::class, 'store_page']);

Route::prefix('dashboard')->middleware(['auth:sanctum'])->group(function(){
    Route::get('/', [UserController::class, 'index']);
    Route::get('forum', [UserController::class, 'forum']);
    Route::get('storepage', [UserController::class, 'store_page']);
});