<?php

use Illuminate\Http\Request;

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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
// Route::middleware('auth:api')->group(function () {
    Route::apiResource('posts', 'PostController', ['only' => ['index', 'show', 'update', 'destroy']]);
    Route::apiResource('tags', 'TagController', ['only' => ['index', 'show']]);

    Route::put('posts/{post}/tags', 'PostTagController@update');
    // Route::put('posts/search', 'PostController@search');
// });
