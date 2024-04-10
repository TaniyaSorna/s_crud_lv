<?php

use App\Http\Controllers\crudController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/store', [crudController::class, 'store'])->name('store');
Route::get('/index', [crudController::class, 'index'])->name('index');
Route::get('/create', [crudController::class, 'create'])->name('create');
Route::get('/show/{id}', [crudController::class, 'show'])->name('show');
Route::delete('/delete/{id}', [crudController::class, 'delete'])->name('delete');

Route::get('/edit/{id}', [crudController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [crudController::class, 'update'])->name('update');

// Route::get('/index', [crudController::class, 'index']);
