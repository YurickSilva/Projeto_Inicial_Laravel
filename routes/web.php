<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Produtos
Route::get('/products', [ProductsController::class, 'createproducts']); // Formulário de criação
Route::post('/products', [ProductsController::class,'storeproducts']);  // Salvar produto
Route::get('/products/list', [ProductsController::class,'showlist']);   // Lista detalhada

// Tipos
Route::get('/types/new',[ProductsController::class,'createtypes']);     // Formulário de criação de tipo
Route::post('/types/new', [ProductsController::class,'storetypes']);    // Salvar tipo
