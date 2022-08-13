<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{UserController,AddressController,PostController,CategoryController};

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

Route::get('/user/{id}',[UserController::class,'index']);
Route::get('/endereco/{id}',[AddressController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'index']);
Route::get('/category/{id}',[CategoryController::class,'index']);
