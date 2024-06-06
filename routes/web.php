<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', [App\Http\Controllers\PostsController::class,'index'])->name('index');

Route::get('posts/create', [App\Http\Controllers\PostsController::class,'create'])->name('create');

Route::get('posts/{id}', [App\Http\Controllers\PostsController::class,'show'])->name('show');

Route::post('posts', [App\Http\Controllers\PostsController::class,'store'])->name('store');