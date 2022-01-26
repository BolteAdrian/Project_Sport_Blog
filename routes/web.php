<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//home page
Route::get('/', 'PagesController@index');

//about page
Route::get('/about', 'PagesController@about');


Route::post('/uploadFile', 'PostsController@uploadFile');

// posts
Route::resource('posts', 'PostsController');

// categories
Route::resource('categories', 'CategoryController');

//football
Route::get('/Football', 'CategoryController@football');

//handball
Route::get('/Handball', 'CategoryController@handball');

//tennis
Route::get('/Tennis', 'CategoryController@tennis');

//olimpics
Route::get('/Olimpics', 'CategoryController@olimpics');



//index for another categories
Route::get('/default/{name}', ['uses' =>'CategoryController@default']);

//auth
Auth::routes();

//user s page for posts management
Route::get('/dashboard', 'DashboardController@index');
