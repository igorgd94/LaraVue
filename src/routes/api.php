<?php

use App\Http\Controllers\Api\EmailController;
use App\Http\Controllers\Api\PersonController;
use App\Http\Controllers\Api\PhoneNumberController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PersonController::class)->group(function () {
    Route::get('/persons', 'index');
    Route::post('/persons', 'create');
    Route::put('/persons/{id}', 'update');
    Route::delete('/persons/{id}', 'delete');
});

Route::controller(EmailController::class)->group(function () {
    Route::post('/emails', 'create');
    Route::put('/emails/{id}', 'update');
    Route::delete('/emails/{id}', 'delete');
});

Route::controller(PhoneNumberController::class)->group(function () {
    Route::post('/phone-numbers', 'create');
    Route::put('/phone-numbers/{id}', 'update');
    Route::delete('/phone-numbers/{id}', 'delete');
});
