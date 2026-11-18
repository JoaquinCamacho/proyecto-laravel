<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductosController;

Route::get('/',[HomeController::class, 'index'])
    ->name('home');

Route::get('/productos',[ProductosController::class,'productos'])
    ->name('productos');

Route::get('/post',[PostController::class, 'post'])
    ->name('post');

Route::get('/productos/{id}',[App\Http\Controllers\ProductosController::class,'view'])
    ->name('productos.view')
    ->whereNumber('id');

Route::get('/blog/{id}',[PostController::class, 'view'])
    ->name('post.view')
    ->whereNumber('id');

Route::get('/admin/posts', [PostController::class, 'admin'])
    ->name('admin.posts');

Route::get('/admin/posts/crear', [PostController::class, 'create'])
    ->name('admin.posts.create');

Route::post('/admin/posts/crear', [PostController::class, 'store'])
    ->name('admin.posts.store');

Route::get('/admin/posts/{id}/editar', [PostController::class, 'edit'])
    ->name('admin.posts.edit')
    ->whereNumber('id');
    
Route::put('/admin/posts/{id}/editar', [PostController::class, 'update'])
    ->name('admin.posts.update')
    ->whereNumber('id');    