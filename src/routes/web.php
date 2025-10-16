<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ThanksController;
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
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', [ShopController::class, 'index'])->name('shops.index');
Route::get('/detail/{shop_id}', [ShopController::class, 'show'])->name('shops.show');
Route::get('/search', [ShopController::class, 'search'])->name('shops.search');
Route::get('/search/area', [ShopController::class, 'searchByArea'])->name('shops.search.area');
Route::get('/search/genre', [ShopController::class, 'searchByGenre'])->name('shops.search.genre');
Route::get('/search/name', [ShopController::class, 'searchByName'])->name('shops.search.name');

Route::get('/thanks', [ThanksController::class, 'index'])->name('thanks');

// Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/detail/{shop_id}', [ReservationController::class, 'store'])->name('reservation.store'); 
    Route::get('/done', [ReservationController::class, 'done'])->name('reservation.done');                
    Route::delete('/reservation/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy'); 

    Route::get('/mypage', [MyPageController::class, 'index'])->name('mypage');  
    Route::get('/mypage/reservations', [MyPageController::class, 'reservations'])->name('mypage.reservations');
    Route::get('/mypage/favorites', [MyPageController::class, 'favorites'])->name('mypage.favorites');

    Route::post('/favorite/add', [FavoriteController::class, 'store'])->name('favorite.add');
    Route::post('/favorite/remove', [FavoriteController::class, 'destroy'])->name('favorite.remove');
// });
