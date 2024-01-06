<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/items',[ItemController::class,'index'])->name('items.index');
// Route::get('/items/create',[ItemController::class,'create'])->name('items.create');
// Route::post('/items',[ItemController::class,'store'])->name('items.store');
// Route::get('/items/{item}/edit',[ItemController::class,'edit'])->name('items.edit');
// Route::put('/items/{item}/update',[ItemController::class,'update'])->name('items.update');
// Route::delete('/items/{item}/delete',[ItemController::class,'destroy'])->name('items.delete');

Route::resource("/items", ItemController::class);