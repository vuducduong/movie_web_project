<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\CategoryController;
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


Route::middleware('setLocale')->get('/', [MovieController::class, 'indexFontEnd'])->name('movie-fontEnd.index');

Route::middleware('setLocale')->prefix('user')->group(function () {
    Route::get('/movie-fontEnd/{id}/show', [MovieController::class, 'showFontEnd'])->name('movie-fontEnd.detail');

    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'userLogin'])->name('success.login-user');
    Route::post('change-language', [LangController::class, 'setLocale'])->name('lang.setLocale');
    Route::get('/dangnhap', [LoginController::class, 'admin'])->name('admin');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/signup', [UserController::class, 'create'])->name('sign-up');
    Route::post('/signup', [UserController::class, 'store'])->name('confirm');
});


Route::group(['prefix' => 'movie'], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.list');

    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/create', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::post('/{id}/edit', [MovieController::class, 'update'])->name('movies.update');
    Route::get('/{id}/delete', [MovieController::class, 'destroy'])->name('movies.destroy');
});

Route::group(['prefix' => 'country'], function () {
    Route::get('/', [CountryController::class, 'index'])->name('country.list');

    Route::get('/create', [CountryController::class, 'create'])->name('country.create');
    Route::post('/create', [CountryController::class, 'store'])->name('country.store');
    Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
    Route::post('/{id}/edit', [CountryController::class, 'update'])->name('country.update');
    Route::get('/{id}/delete', [CountryController::class, 'destroy'])->name('country.destroy');

    Route::post('/search', [CountryController::class, 'getCountrySearch'])->name('country.complete_search');
    Route::get('/search', [CountryController::class, 'search'])->name('country.search');


});


Route::group(['prefix' => 'director'], function () {
    Route::get('/', [DirectorController::class, 'index'])->name('directors.list');

    Route::get('/create', [DirectorController::class, 'create'])->name('directors.create');
    Route::post('/create', [DirectorController::class, 'store'])->name('directors.store');
    Route::get('/{id}/edit', [DirectorController::class, 'edit'])->name('directors.edit');
    Route::post('/{id}/edit', [DirectorController::class, 'update'])->name('directors.update');
    Route::get('/{id}/delete', [DirectorController::class, 'destroy'])->name('directors.destroy');

    Route::post('/search', [DirectorController::class, 'getDirectorSearch'])->name('director.complete_search');
    Route::get('/search', [DirectorController::class, 'search'])->name('directors.search');


});

Route::group(['prefix' => 'actor'], function () {
    Route::get('/', [ActorController::class, 'index'])->name('actors.list');

    Route::get('/create', [ActorController::class, 'create'])->name('actors.create');
    Route::post('/create', [ActorController::class, 'store'])->name('actors.store');
    Route::get('/{id}/edit', [ActorController::class, 'edit'])->name('actors.edit');
    Route::post('/{id}/edit', [ActorController::class, 'update'])->name('actors.update');
    Route::get('/{id}/delete', [ActorController::class, 'destroy'])->name('actors.destroy');


    Route::post('/search', [ActorController::class, 'getActorSearch'])->name('actors.complete_search');
    Route::get('/search', [ActorController::class, 'search'])->name('actors.search');
});


Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index'])->name('category.list');

    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/{id}/edit', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');


    Route::post('/search', [CategoryController::class, 'getCategorySearch'])->name('category.complete_search');
    Route::get('/search', [CategoryController::class, 'search'])->name('category.search');
});


Route::get('/admin', function () {
    return view('layouts.master');
})->name('master');



