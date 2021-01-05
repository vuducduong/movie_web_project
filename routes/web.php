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
    return view('layouts.layout');
});

Route::group(['prefix' => 'movie'], function () {
    Route::get('/',[MovieController::class ,'index'])->name('movies.list');

    Route::get('/create',[MovieController::class ,'create'])->name('movies.create');
    Route::post('/create',[MovieController::class,'store'])->name('movies.store');
    Route::get('/{id}/edit',[MovieController::class ,'edit'])->name('movies.edit');
    Route::post('/{id}/edit',[MovieController::class,'update'])->name('movies.update');
    Route::get('/{id}/delete',[MovieController::class ,'destroy'])->name('movies.destroy');

//    Route::post('/search',[\App\Http\Controllers\MovieController::class,'search'])->name('customers.search');


//    Route::get('/filter',[\App\Http\Controllers\MovieController::class ,'filterByCity'])->name('customers.filterByCity');
});


Route::group(['prefix' => 'countrys'], function () {
    Route::get('/',[\App\Http\Controllers\CountryController::class ,'index'])->name('country.list');

    Route::get('/create',[\App\Http\Controllers\CountryController::class ,'create'])->name('country.create');
    Route::post('/create',[\App\Http\Controllers\CountryController::class,'store'])->name('country.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\CountryController::class ,'edit'])->name('country.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\CountryController::class,'update'])->name('country.update');
    Route::get('/{id}/delete',[\App\Http\Controllers\CountryController::class ,'destroy'])->name('country.destroy');


});


Route::group(['prefix' => 'derector'], function () {
    Route::get('/',[\App\Http\Controllers\DirectorController::class ,'index'])->name('directors.list');

    Route::get('/create',[\App\Http\Controllers\DirectorController::class ,'create'])->name('directors.create');
    Route::post('/create',[\App\Http\Controllers\DirectorController::class,'store'])->name('directors.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\DirectorController::class ,'edit'])->name('directors.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\DirectorController::class,'update'])->name('directors.update');
    Route::get('/{id}/delete',[\App\Http\Controllers\DirectorController::class ,'destroy'])->name('directors.destroy');


});



