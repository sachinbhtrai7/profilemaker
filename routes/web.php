<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});
Route::post('/view_profile',[PostController::class,'view_profile']);
Route::get('/view_profile',[PostController::class,'view']);

Route::get('/delete_profile/{email}',[PostController::class,'delete']);

