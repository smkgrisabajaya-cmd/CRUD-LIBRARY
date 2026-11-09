<?php


use App\Http\Controllers\FormController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register',[RegisterController::class,'index']);
Route::post('/postRegister',[RegisterController::class,'postRegister']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/postLogin',[LoginController::class,'postLogin']);
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/indexBook',[BookController::class,'index']);
Route::get('/formBook',[BookController::class,'create']);
Route::post('/postForm',[BookController::class,'store']);
Route::get('/editForm',[BookController::class,'edit']);
