<?php

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/uno', 'HomeController@objectives');
Route::get('/dos', 'HomeController@corporate');
Route::get('/tres', 'HomeController@ti');
Route::get('/cuatro', 'HomeController@processes');

// Objectives
Route::get('/objectives', 'ObjectiveController@index');
Route::post('/objectives', 'ObjectiveController@store');
Route::delete('/objectives', 'ObjectiveController@destroy');
Route::put('/objectives', 'ObjectiveController@update');
Route::post('/objectives/aligned', 'ObjectiveController@align');

// Corporate goals
Route::get('/corporate/{d}', 'CorporateGoalController@byDimension');
Route::get('/corporate/{d}/{o}', 'CorporateGoalController@byDimensionAndObjective');

// Ti goals
Route::get('/ti/{o}', 'TiGoalController@byStrategicObjective');

// Relationships
Route::post('/align/objective/corporate', 'AlignmentController@objectiveWithCorporate');
Route::post('/align/objective-corporate/ti', 'AlignmentController@objectiveCorporateTi');
