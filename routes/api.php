<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function () {
 
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
       //route for logout need to be inside this auth sanctum
    Route::post('/logout', [AuthController::class,'logout']);
    Route::apiResource('/users', UserController::class);

});
// route for controller signup method
Route::post('/signup', [AuthController::class,'signup']);
// route for controller login method
Route::post('/login', [AuthController::class,'login']);

