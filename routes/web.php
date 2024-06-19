<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'checkUserRole',
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'redirect'])->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category', [AdminController::class,'view_category']);

route::post('/add_category', [AdminController::class,'add_category']);

route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

route::get('/view_product', [AdminController::class,'view_product']);

route::post('/add_goods', [AdminController::class,'add_goods']);

route::get('/show_goods', [AdminController::class,'show_goods']);

route::get('/delete_goods/{id}', [AdminController::class,'delete_goods']);

route::get('/update_goods/{id}', [AdminController::class,'update_goods']);

route::post('/update_goods_confirm/{id}', [AdminController::class,'update_goods_confirm']);

route::get('/view_order', [AdminController::class,'view_order']);





route::get('/product_details/{id}', [HomeController::class,'product_details']);

route::post('/add_cart/{id}', [HomeController::class,'add_cart']);

route::get('/show_cart', [HomeController::class,'show_cart']);

route::get('/remove_cart/{id}', [HomeController::class,'remove_cart']);

route::get('/cash_order', [HomeController::class,'cash_order']);

route::get('/stripe/{totalprice}', [HomeController::class,'stripe']);

Route::post('stripe/{totalprice}', [HomeController::class,'stripePost'])->name('stripe.post');




