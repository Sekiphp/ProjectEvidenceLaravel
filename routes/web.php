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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'ProjectsController@list')->name('project.list');
    Route::get('/project/list', 'ProjectsController@list')->name('project.list');
    Route::get('/project/new', 'ProjectsController@showNew')->name('project.new.show');
    Route::post('/project/new', 'ProjectsController@postNew')->name('project.new.post');
    Route::get('/project/delete/{id}', 'ProjectsController@delete')->name('project.delete.id');
    Route::get('/project/edit/{id}', 'ProjectsController@edit')->name('project.edit.id');
});
