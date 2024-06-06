<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('posts', [App\Http\Controllers\PostsController::class,'index'])->name('index');

Route::get('posts/create', [App\Http\Controllers\PostsController::class,'create'])->name('create');

Route::get('posts/{id}', [App\Http\Controllers\PostsController::class,'show'])->name('show');

Route::get('posts/{id}/edit', [App\Http\Controllers\PostsController::class,'edit'])->name('edit');

Route::put('posts/{id}', [App\Http\Controllers\PostsController::class,'update'])->name('update');

Route::post('posts', [App\Http\Controllers\PostsController::class,'store'])->name('store');

Route::delete('posts/{id}', [App\Http\Controllers\PostsController::class,'destroy'])->name('destroy');