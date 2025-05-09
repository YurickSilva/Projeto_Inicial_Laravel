<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/products', [ProductsController::class,'storeproducts']);
Route::get('/products', [ProductsController::class, 'createproducts']);
Route::post('/types/new', [ProductsController::class,'storetypes']);
Route::get('/types/new',[ProductsController::class,'createtypes']);
Route::get('/products/list', [ProductsController::class,'showlist']);