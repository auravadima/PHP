<?php

use Illuminate\Http\Request;

Route::group([ 'prefix' => 'test', 'middleware' => 'api'], function() {
    Route::get("one", "TestController@getOne");
    Route::post("one", "TestController@setOne");
});
