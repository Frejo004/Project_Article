<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAuth;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticleController::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [LoginAuth::class, 'authenticate']);

Route::get('/sign-up', [AuthController::class, 'signup']);
Route::post('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');



Route::get('/article', [ArticleController::class, 'create']);
Route::post('/article', [ArticleController::class, 'store']);

Route::get('/show', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/index', [ArticleController::class, 'index'])->name('articles.download');
