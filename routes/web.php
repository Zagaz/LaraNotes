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
Route::get('about',[MainController::class,'about']);
Route::get('contact',[MainController::class,'contact']);

//With paramreters
Route::get('/main/{name}',[MainController::class,'main']);
Route::get('/page2/{name}',[MainController::class,'page2']);
Route::get('/page3/{name}',[MainController::class,'page3']);

