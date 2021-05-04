<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
=======
=======
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d
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

<<<<<<< HEAD
});
>>>>>>> bac3761 (a new update to our backend server)
=======
});
>>>>>>> bac3761bd6a126f93e2e2b41b5c1f523ebda034d