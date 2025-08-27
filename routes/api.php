<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group(['prefix' => 'V1'],function(){

    Route::post('/register', [AuthContoller::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/get-document/{$slug}' , [GetDataController::class, 'getdocument']);

});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});
