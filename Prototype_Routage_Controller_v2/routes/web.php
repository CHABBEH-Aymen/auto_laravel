<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth.middleware')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('article',ArticleController::class);
});

Route::get('login',[AuthController::class,'showLoginForm'])->name('loginform');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->name('logout');
Route::get("/articles",[ArticleController::class,'indexpublic'])->name('indexpublic');
Route::get("/articles/{id}/show",[ArticleController::class,'showpublic'])->name('showpublic');



