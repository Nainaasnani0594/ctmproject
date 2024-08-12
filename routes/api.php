<?php

use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\UserRoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:sanctum')->get('/user-role', function (Request $request) {
//     return response()->json(['role' => $request->user()->roles->pluck('name')->first()]);
// });
Route::middleware('auth:sanctum')->get('/user-role', [UserRoleController::class, 'getUserRole']);

Route::resource('activities', ActivityController::class)->only(['update']);
