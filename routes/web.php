<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellerController;
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
    Route::prefix('seller')->middleware('isSeller')->group(function(){
        Route::get('/', [SellerController::class, 'index'])->name('seller.dashboard');
        Route::get('/create', [SellerController::class, 'create'])->name('create-store');
        Route::post('/store', [SellerController::class, 'store'])->name('input-store');
        Route::get('/forum', [SellerController::class, 'forum']);
        Route::get('/storepage',[SellerController::class, 'storepage']);
        Route::get('/managestore', [SellerController::class, 'managestore']);
        // Route::get('/{id}/edit', [SellerController::class, 'edit']);
        // Route::put('/{id}/update', [SellerController::class, 'update']);
        // Route::delete('/{id}/delete', [SellerController::class, 'delete']);
    });
    Route::get('/', [UserController::class, 'index']);
    Route::get('forum', [UserController::class, 'forum']);
    Route::get('storepage', [UserController::class, 'store_page']);
    Route::get('cart',[UserController::class, 'cart'])->name('cart');
    Route::get('paymentMethodPage', [UserController::class, 'payment_method'])->name('paymentMethodPage');
    Route::get('checkout', [UserController::class, 'checkout'])->name('checkout');
});