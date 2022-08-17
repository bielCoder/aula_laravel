<?php

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

Route::get('/index', function () {
    return view('site.index');
})->name('site.home');

Route::get('/about',function(){
    return view('site.about');
})->name('site.about');

Route::get('/products',function(){
    return view('site.products');
})->name('site.products');

Route::get('/contact',function(){
    return view('site.contact');
})->name('site.contact');
