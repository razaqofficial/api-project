<?php

Route::post('login','Auth\LoginController@login');

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/products','HomeController@getProducts');
});
