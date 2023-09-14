<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;



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

Route::get('/', [HomeController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
route::get('/contact/{contact}', [ContactController::class, 'show'])->name('contact.show');
Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::get('/contact/edit/{contact}',[ContactController::class, 'edit'])->name('contact.edit');
Route::put('/contact/{contact}', [ContactController::class, 'update'])->name('contact.update');

Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
