<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=> 'form'],function(){

// verbo GET

Route::get('usuarios',[userController::class,'listAll'])->name('users.listAll');
Route::get('usuarios/new',[userController::class,'create'])->name('users.new');
Route::get('usuarios/{user}',[userController::class,'listSingle'])->name('users.listSingle');
Route::get('usuarios/{user}/update',[userController::class,'update'])->name('users.update');


// verbo POST

Route::post('usuarios/store',[userController::class,'store'])->name('users.store');



// verbo PATH/PUT

Route::put('usuarios/{user}/edit',[userController::class,'edit'])->name('users.edit');

// verbo DELETE

Route::delete('usuarios/{user}/clear',[userController::class,'destroy'])->name('users.destroy');
});

