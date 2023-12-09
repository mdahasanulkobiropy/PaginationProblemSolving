<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class, 'index'])->name('user.index');
Route::get('/edit/{id}/{page}',[UserController::class, 'edit'])->name('edit.user');
Route::post('/update/{id}',[UserController::class, 'update'])->name('update.user');
Route::get('/delete/{id}',[UserController::class, 'delete'])->name('delete.user');
