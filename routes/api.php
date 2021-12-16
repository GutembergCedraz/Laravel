<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuarioController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// List user
Route::get('/users', [UserController::class, 'index']);

// List single user
Route::get('/user/{id}', [UserController::class, 'show']);

// Create new user
Route::post('/user', [UserController::class, 'store']);

// Update user
Route::put('/user/{id}', [UserController::class, 'update']);

// Delete user
Route::delete('/user/{id}', [UserController::class,'destroy']);

Route::get('/products', [ProdutoController::class, 'index']);

// List single product
Route::get('/product/{id}', [ProdutoController::class, 'show']);

// Create new product
Route::post('/product', [ProdutoController::class, 'store']);

// Update product
Route::put('/product/{id}', [ProdutoController::class, 'update']);

// Delete product
Route::delete('/product/{id}', [ProdutoController::class,'destroy']);

Route::post('/cadastrar_usuario', [UsuarioController::class, 'store']);
