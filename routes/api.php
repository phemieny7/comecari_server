<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

//user routes




Route::group(['middleware' => ['cors', 'json.response']], function () {
  //users
  Route::prefix('user')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/verify', [UserController::class, 'verify']);
    Route::post('/resend_code', [UserController::class, 'resend_code']);
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth:sanctum');
    Route::post('/request-pickup', [UserController::class, 'request_pickup']);
  });  

});