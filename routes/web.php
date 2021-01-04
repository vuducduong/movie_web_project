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

Route::get('/', function () {
    return view('font-end.master');
});

Route::group(['prefix' => 'movie'], function () {
    Route::get('/',[\App\Http\Controllers\MovieController::class ,'index'])->name('movies.list');

    Route::get('/create',[\App\Http\Controllers\MovieController::class ,'create'])->name('movies.create');
    Route::post('/create',[\App\Http\Controllers\MovieController::class,'store'])->name('movies.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\MovieController::class ,'edit'])->name('movies.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\MovieController::class,'update'])->name('movies.update');
    Route::get('/{id}/delete',[\App\Http\Controllers\MovieController::class ,'destroy'])->name('movies.destroy');

//    Route::post('/search',[\App\Http\Controllers\MovieController::class,'search'])->name('customers.search');


//    Route::get('/filter',[\App\Http\Controllers\MovieController::class ,'filterByCity'])->name('customers.filterByCity');
});
