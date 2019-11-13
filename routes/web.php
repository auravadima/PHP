<?php

Route::prefix('test')->group(function () {
  Route::get("one", "TestController@getOne");
  Route::post("one", "TestController@setOne");
});