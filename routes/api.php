<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Sample API route
Route::group(['middleware'=> ['auth:sanctum']], function(){
    Route::post('test', [ApiController::class, 'tst']);
    Route::post('logout', [ApiController::class, 'logout']);
    Route::post('getLoginState', [ApiController::class, 'getLoginState']);
});

Route::post('login', [ApiController::class, 'login']);
