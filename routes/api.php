<?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

Route::post('register', 'API\RegisterController@action');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
