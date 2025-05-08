<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/products/new', [ProductsController::class,'store']);
Route::get('/products/new', [ProductsController::class, 'create']);
Route::get('/products', [ProductsController::class,'index']);