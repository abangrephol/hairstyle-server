<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'LoginController@index');
Route::post('auth/login', 'LoginController@checking');
Route::get('dashboard', function () {
        return view('dashboard');
    });
Route::get('frames', 'FramesController@index');
Route::get('frames/add', 'FramesController@add');
Route::post('frames/insert', 'FramesController@insert');
Route::get('frames/edit/{id}', 'FramesController@edit');
Route::put('frames/update/{id}', 'FramesController@update');
Route::get('frames/delete/{id}', 'FramesController@delete');

Route::get('categories', 'CategoriesController@index');
Route::get('categories/add', 'CategoriesController@add');
Route::post('categories/insert', 'CategoriesController@insert');
Route::get('categories/edit/{id}', 'CategoriesController@edit');
Route::post('categories/update/{id}', 'CategoriesController@update');
Route::get('categories/delete/{id}', 'CategoriesController@delete');

Route::get('hairstyles', 'HairstylesController@index');
Route::get('hairstyles/add', 'HairstylesController@add');
Route::post('hairstyles/insert', 'HairstylesController@insert');
Route::get('hairstyles/edit/{id}', 'HairstylesController@edit');
Route::get('hairstyles/edit/midpoint/{id}', 'HairstylesController@midpoint');
Route::post('hairstyles/update/{id}', 'HairstylesController@update');
Route::post('hairstyles/updatepoint/{id}', 'HairstylesController@updatePoint');
Route::get('hairstyles/delete/{id}', 'HairstylesController@delete');


Route::resource('api/hairstyles','API\HairstylesController');
Route::resource('api/frames','API\FramesController');
Route::resource('api/categories','API\CategoriesController');
