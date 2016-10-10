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

Route::get('/admin',
            ['as'   => 'admin',
             'uses' => 'HomeController@admin']);


// General Resources

// Note: use {resource}/admin to list all in admin dashboard
//       {resource}/ is tied to index for public view

Route::get('articles/admin',
            ['as'   => 'articles.admin',
             'uses' => 'ArticleController@admin']);
Route::resource('articles', 'ArticleController');

Route::resource('projects', 'ProjectController');
Route::get('projects/admin',
            ['as'   => 'projects.admin',
             'uses' => 'ProjectController@admin']);

Route::resource('skills', 'SkillController');
Route::get('skills/admin',
            ['as'   => 'skills.admin',
             'uses' => 'SkillController@admin']);


// Contact Page

Route::get('contact',
            ['as'   => 'contact',
             'uses' => 'ContactController@show']);

// Login Page
Route::get('login',
            ['as'   => 'login',
             'uses' => 'Auth\\LoginController@showLoginForm']);
Route::post('login',   'Auth\\LoginController@login');
Route::post('logout',
            ['as'   => 'logout',
             'uses' => 'Auth\\LoginController@logout']);


// Generic Pages

Route::resource('pages', 'PageController', [
                'except' => [ 'show' ] ]);
Route::get('pages/admin',
            ['as'   => 'pages.admin',
             'uses' => 'PageController@admin']);

Route::get('{page}',
            ['as'   => 'page',
             'uses' => 'PageController@show']);
