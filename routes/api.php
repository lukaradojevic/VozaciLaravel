<?php

use App\Http\Controllers\API\AuthKontroler;
use App\Http\Controllers\API\TimKontroler;
use App\Http\Controllers\API\VozacKontroler;
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

Route::post('register', [AuthKontroler::class, 'register']);
Route::post('login', [AuthKontroler::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('tim', [TimKontroler::class, 'index']);
    Route::get('tim/{tim}', [TimKontroler::class, 'show']);
    Route::delete('tim/{tim}', [TimKontroler::class, 'destroy']);
    Route::put('tim/{tim}', [TimKontroler::class, 'update']);
    Route::get('vozac', [VozacKontroler::class, 'index']);
    Route::get('vozac/{vozac}', [VozacKontroler::class, 'show']);
    Route::post('logout', [AuthKontroler::class, 'logout']);
});
