<?php

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/objetivos-empresa', 'HomeController@objectives');
Route::get('/objetivos-cobit-corporativos', 'HomeController@corporate');
Route::get('/objetivos-cobit-ti', 'HomeController@ti');
Route::get('/procesos-cobit', 'HomeController@processes');
