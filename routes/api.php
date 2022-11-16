<?php

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

Route::get('tim', [TimKontroler::class, 'index']);
Route::get('tim/{tim}', [TimKontroler::class, 'show']);
Route::delete('tim/{tim}', [TimKontroler::class, 'destroy']);
Route::put('tim/{tim}', [TimKontroler::class, 'update']);

Route::get('vozac', [VozacKontroler::class, 'index']);
Route::get('vozac/{vozac}', [VozacKontroler::class, 'show']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
