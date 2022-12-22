<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiControlller;
use App\Http\Controllers\Assessment2;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[FontController::class,'home'])->name('/');
Route::get('login',[FontController::class,'login'])->name('login');
Route::get('signup',[FontController::class,'signUp'])->name('signup');
Route::get('forget/password',[FontController::class,'forgetPassword'])->name('forget.password');

//Auth
Route::post('register',[AuthenticationController::class,'register'])->name('register');
Route::post('signup',[AuthenticationController::class,'signUp'])->name('sign.up');


Route::get('logout',[AuthenticationController::class,'logout'])->name('logout');

Route::get('crud',[AdminController::class,'crud'])->name('crud');

Route::post('store/product',[ProductController::class,'storeProduct'])->name('store.product');
Route::post('delete/product/',[ProductController::class,'deleteProduct'])->name('delete.product');
Route::post('edit/product/',[ProductController::class,'editProduct'])->name('edit.product');
Route::post('update/product/',[ProductController::class,'updateProduct'])->name('update.product');

Route::get('manage',[ProductController::class,'manage'])->name('manage');


// API

Route::get('store-api-data',[ApiControlller::class,'store'])->name('todo.api');
Route::get('view.todo.api',[ApiControlller::class,'viewTodoApi'])->name('view.todo.api');

//Assesment 2
Route::get('assessment2',[Assessment2::class,'home'])->name('assessment2');
