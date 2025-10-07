<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/",function(){
        return view('admin.dashboard');
    });
    Route::get("/users",[UserController::class,'getUsers']);
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Auth::routes();
// routes/web.php



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
