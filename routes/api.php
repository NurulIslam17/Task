<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Assessment2;


//Get data
Route::get('/view-student/{id?}',[Assessment2::class,'viewStudent']);
// add Data
Route::post('add-student',[Assessment2::class,'addStudent']);
// delete Data
Route::delete('delete-student/{id}',[Assessment2::class,'deleteStudent']);

// update Data
Route::put('update-student/{id}',[Assessment2::class,'updateStudent']);







//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
