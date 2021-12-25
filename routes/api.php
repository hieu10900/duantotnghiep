<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SliderController;

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
Route::get('sliders', 'App\Http\Controllers\Api\SliderController@index');
Route::post('sliders/store', 'App\Http\Controllers\Api\SlidZSerController@store');
Route::put('sliders/{slider}', 'App\Http\Controllers\Api\SliderController@update');
Route::delete('sliders/{slider}', 'App\Http\Controllers\Api\SliderController@destroy');
Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
