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

// Home Page

Route::get('/',
            ['as'   => 'home',
             'uses' => 'HomeController@index']);


// General Resources

Route::resource('articles', 'ArticleController');
Route::resource('projects', 'ProjectController');
Route::resource('skill', 'SkillController');


// Contact Page

Route::get('contact',
            ['as'   => 'contact',
             'uses' => 'ContactController@show']);


// Generic Pages

Route::get('{page}',
            ['as'   => 'page.show',
             'uses' => 'PageController@show']);

Route::get('page/create',
            ['as'   => 'page.create',
             'uses' => 'PageController@create']);

Route::post('page',
            ['as'   => 'page.store',
             'uses' => 'PageController@store']);

Route::get('page/{page}/edit',
            ['as'   => 'page.edit',
             'uses' => 'PageController@edit']);

Route::put('page/{page}',
            ['as'   => 'page.update',
             'uses' => 'PageController@update']);

Route::patch('page/{page}',
            ['uses' => 'PageController@update']);

Route::delete('page/{page}',
            ['as'   => 'page.destroy',
             'uses' => 'PageController@update']);
