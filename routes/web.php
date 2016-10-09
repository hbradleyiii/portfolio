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
Route::resource('skills', 'SkillController');


// Contact Page

Route::get('contact',
            ['as'   => 'contact',
             'uses' => 'ContactController@show']);


// Generic Pages

Route::resource('pages', 'PageController', [
                'except' => [ 'show' ] ]);

Route::get('{page}',
            ['as'   => 'page',
             'uses' => 'PageController@show']);
