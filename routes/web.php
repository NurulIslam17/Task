<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[FontController::class,'home'])->name('/');
Route::get('login',[FontController::class,'login'])->name('login');
Route::get('signup',[FontController::class,'signUp'])->name('signup');
