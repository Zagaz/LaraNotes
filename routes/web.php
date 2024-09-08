<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    echo "About us";

});

Route::get('main',[MainController::class,'main']);

Route::get('about',[MainController::class,'about']);

Route::get('contact',[MainController::class,'contact']);
