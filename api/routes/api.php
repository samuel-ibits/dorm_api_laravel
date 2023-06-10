<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

// market
Route::resource('marketorders', DormcomnMarketOrdersController::class);
Route::resource('marketagent', DormcomnMarketAgentControllerr::class);
Route::resource('marketproducts', DormcomnMarketProductsController::class);
// users
Route::resource('anticipate', DormcomnUsersAnticipateController::class);
Route::resource('user', DormcomnUsersUsersControllerr::class);




});
