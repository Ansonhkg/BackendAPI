<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{id}', 'TasksController@show');