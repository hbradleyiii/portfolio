<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/',
            ['as'   => 'home',
             'uses' => 'HomeController@index']);

Route::get('articles',
            ['as'   => 'articles',
             'uses' => 'ProjectController@index']);

Route::get('article/{project_name}',
            ['as'   => 'article',
             'uses' => 'ProjectController@show']);

Route::get('page/{project_name}',
            ['as'   => 'page',
             'uses' => 'ProjectController@show']);

Route::get('projects',
            ['as'   => 'projects',
             'uses' => 'ProjectController@index']);

Route::get('project/{project_name}',
            ['as'   => 'project',
             'uses' => 'ProjectController@show']);
