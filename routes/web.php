<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLog;
use Illuminate\Support\Facades\Route;

//Auth routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit',[AuthController::class,'loginSubmit']);

Route::middleware([CheckIsLog::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/newnote', [MainController::class, 'newNote']);
    Route::get('/logout', [AuthController::class, 'logout']);
});


