<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/movie',[MovieController::class,'index']);
Route::post('/movie',[MovieController::class,'store'])->name('movie.create');
Route::get("/edit/{id}",[MovieController::class,'edit'])->name('movie.edit');
Route::post("/update/{id}",[MovieController::class,'update'])->name("movie.update");
Route::get("/delete/{id}",[MovieController::class,'destroy'])->name("movie.delete");