<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LoginController;
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






Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'storeAdminLogin'])->name('success.login');
Route::post('/login',[LoginController::class,'userLogin'])->name('success.login-user');



Route::group(['prefix' => 'movie'], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.list');

    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/create', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::post('/{id}/edit', [MovieController::class, 'update'])->name('movies.update');
    Route::get('/{id}/delete', [MovieController::class, 'destroy'])->name('movies.destroy');


    Route::get('/font-end', [MovieController::class, 'indexFontEnd'])->name('movie-fontEnd.index');
    Route::get('/movie-fontEnd/{id}/show', [MovieController::class, 'showFontEnd'])->name('movie-fontEnd.detail');
});

Route::group(['prefix' => 'countrys'], function () {
    Route::get('/',[CountryController::class ,'index'])->name('country.list');

    Route::get('/create',[CountryController::class ,'create'])->name('country.create');
    Route::post('/create',[CountryController::class,'store'])->name('country.store');
    Route::get('/{id}/edit',[CountryController::class ,'edit'])->name('country.edit');
    Route::post('/{id}/edit',[CountryController::class,'update'])->name('country.update');
    Route::get('/{id}/delete',[CountryController::class ,'destroy'])->name('country.destroy');


});


Route::group(['prefix' => 'derector'], function () {
    Route::get('/',[DirectorController::class ,'index'])->name('directors.list');

    Route::get('/create',[DirectorController::class ,'create'])->name('directors.create');
    Route::post('/create',[DirectorController::class,'store'])->name('directors.store');
    Route::get('/{id}/edit',[DirectorController::class ,'edit'])->name('directors.edit');
    Route::post('/{id}/edit',[DirectorController::class,'update'])->name('directors.update');
    Route::get('/{id}/delete',[DirectorController::class ,'destroy'])->name('directors.destroy');
});



