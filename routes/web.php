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

//about section
Route::get('/about', 'PagesController@about');


Route::post('/uploadFile', 'PostsController@uploadFile');

//lista postari
Route::resource('posts', 'PostsController');

//lista categorii
Route::resource('categories', 'CategoryController');

//lista categorii
Route::get('/Football', 'CategoryController@football');

//lista categorii
Route::get('/Handball', 'CategoryController@handball');

//lista categorii
Route::get('/Tennis', 'CategoryController@tennis');

//lista categorii
Route::get('/Olimpics', 'CategoryController@olimpics');



//index categorie default
Route::get('/default/{name}', ['uses' =>'CategoryController@default']);

//auth
Auth::routes();

//pt autori (adaugare postari noi /stergere)
Route::get('/dashboard', 'DashboardController@index');
