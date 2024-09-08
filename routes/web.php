<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    echo "About us";

});
//001
Route::get('main',[MainController::class,'main']);
Route::get('about',[MainController::class,'about']);
Route::get('contact',[MainController::class,'contact']);

//With paramreters
Route::get('/user/{name}',[MainController::class,'user']);
