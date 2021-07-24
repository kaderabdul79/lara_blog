<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CategoryController;
// Route::get('/test',function(){
//     return view('register');
// });

Route::get('/', [FrontController::class, 'index']);
Route::get('/post', [FrontController::class, 'post']);

Route::get('/login', [FrontController::class, 'showLoginForm'])->name('login');
Route::post('/login', [FrontController::class, 'processLogin']);

Route::get('/register', [FrontController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [FrontController::class, 'processRegistration']);

//categories
Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('/categories/add',[CategoryController::class,'create'])->name('categories.create');
Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');
Route::get('/categories/{id}',[CategoryController::class,'show'])->name('categories.show');
Route::get('/categories/{id}/edit',[CategoryController::class,'edit'])->name('categories.edit');
Route::put('/categories/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::delete('/categories/{id}',[CategoryController::class,'delete'])->name('categories.delete');