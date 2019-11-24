<?php

use Illuminate\Http\Request;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('test')->group(function () {
    Route::get("one", "TestController@getOne");
    Route::post("one", "TestController@setOne");
});