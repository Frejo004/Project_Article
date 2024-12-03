<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginAuth;
use Illuminate\Support\Facades\Route;


Route::get('/home', [ArticleController::class, 'index']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [AuthController::class, 'login']);
Route::post('/login', [LoginAuth::class, 'authenticate']);

Route::get('/sign-up', [AuthController::class, 'signup']);
Route::post('/sign-up', [AuthController::class, 'sign_up'])->name('sign-up');



Route::get('/articles/create', [ArticleController::class, 'create']);
Route::post('/articles/create', [ArticleController::class, 'store']);


Route::get('/article/{id}', [ArticleController::class, 'show'])->name('articles.show');




Route::get('/index/{id}', [ArticleController::class, 'download'])->name('articles.download');
