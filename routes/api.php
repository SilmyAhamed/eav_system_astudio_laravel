<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Controllers\AuthorizationController;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\Http\Controllers\TransientTokenController;
use Laravel\Passport\Http\Controllers\ClientController;
use Laravel\Passport\Http\Controllers\PersonalAccessTokenController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, "register"]);
Route::post('/login', [AuthController::class, "login"]);







// =================================
Route::post('/oauth/token', [AccessTokenController::class, 'issueToken'])
    ->middleware(['throttle']);

Route::post('/oauth/authorize', [AuthorizationController::class, 'authorize']);

Route::post('/oauth/tokens', [TransientTokenController::class, 'index']);

Route::post('/oauth/clients', [ClientController::class, 'store']);
Route::get('/oauth/clients', [ClientController::class, 'index']);
Route::delete('/oauth/clients/{client_id}', [ClientController::class, 'destroy']);

Route::post('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'store']);
Route::get('/oauth/personal-access-tokens', [PersonalAccessTokenController::class, 'index']);
Route::delete('/oauth/personal-access-tokens/{token_id}', [PersonalAccessTokenController::class, 'destroy']);
// =================================
