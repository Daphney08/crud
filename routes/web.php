<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [
   App\Http\Controllers\IndexController::class,
   'index'
])->name('home');

Route::get('/create', [
    App\Http\Controllers\CreateController::class,
    'index'
 ])->name('create');

 Route::post('/create/save', [
    App\Http\Controllers\CreateController::class,
    'save'
 ])->name('create.save');

 Route::get('/update/{id}', [
   App\Http\Controllers\UpdateController::class,
   'index'
])->name('update');

Route::post('/update/{id}/save', [
   App\Http\Controllers\UpdateController::class,
   'save' 
])->name('update.save');

Route::get('/delete/{id}', [
   App\Http\Controllers\DeleteController::class,
   'index'
])->name('delete');


