<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\exampleController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomePageController::class, ('index')])->name('index');

Route::get('/categories',[NavbarController::class,('categories')])->name('categories');

Route::get('/category/{slug_categoryname}', [CategoryController::class, ('index')])->name('category');

Route::get('/product/{slug_productname}', [ProductController::class, ('index')])->name('product');
Route::post('/search',[ProductController::class,('search')])->name('product_search');
Route::get('/search',[ProductController::class,('search')])->name('product_search');

Route::get('/scart/{slug_scartname}', [ShoppingCartController::class, ('index')])->name('scart');

Route::group(['middleware'=>'auth'],function(){
    Route::get('/pay/{slug_payname}', [PayController::class, ('index')])->name('pay');
    Route::get('/orders', [OrdersController::class, ('index')])->name('orders');
    Route::get('/orders/{id}', [OrdersController::class, ('detail')])->name('order');
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/login', [UserController::class, ('login_form')])->name('user.login');
    Route::post('/login', [UserController::class, ('login')]);
    Route::get('/signup', [UserController::class, ('signup_form')])->name('user.signup');
    Route::post('/signup', [UserController::class, ('signup')]);
    Route::post('/logout',[UserController::class,('logout')])->name('user.logout');
});
