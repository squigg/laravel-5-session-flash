<?php

Route::get('routeWithSessionFlash','BasicController@routeWithSessionFlash')->name('routeWithSessionFlash');
Route::get('routeWithSessionPut','BasicController@routeWithSessionPut')->name('routeWithSessionPut');
Route::get('routeWithoutRedirect','BasicController@routeWithoutRedirect')->name('routeWithoutRedirect');
Route::get('destination','BasicController@destination')->name('destination');
