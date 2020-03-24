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

Route::get('/', 'User@index')->name('/home');
Route::get('/job', 'User@job')->name('job');
Route::get('/candidate', 'User@candidate')->name('candidate');
Route::get('/employer', 'User@employer')->name('employer');
Route::get('/blog', 'User@blog')->name('blog');
Route::get('/UserAuthSet', 'HomeController@index')->name('home');
Route::get('/Job/jobstore', 'HomeController@jobstore')->name('jobstore');

Route::get('/Admin', 'AdminController@index')->middleware('admin');
Route::get('/Admin/add_categories', 'AdminController@create')->middleware('admin');
Route::get('/Admin/display_categories', 'AdminController@show')->middleware('admin');
Route::get('/Admin/{id}/edit', 'AdminController@edit')->middleware('admin');
Route::get('/Admin/{id}/delete', 'AdminController@destroy')->middleware('admin');
Route::get('/Admin/{id}/update', 'AdminController@update')->middleware('admin');
Route::get('/Admin/Categorystore', 'AdminController@store')->middleware('admin');
Auth::routes();
Route::get('/Admin/add_subcategories', 'SubCategories@create')->middleware('admin');
Route::get('/Admin/display_subcategories', 'SubCategories@show')->middleware('admin');
Route::get('/Admin/{id}/subcategoriesedit', 'SubCategories@edit')->middleware('admin');
Route::get('/Admin/{id}/subcategoriesdelete', 'SubCategories@destroy')->middleware('admin');
Route::get('/Admin/{id}/subcategoriesupdate', 'SubCategories@update')->middleware('admin');
Route::get('/Admin/subcategoriesstore', 'SubCategories@store')->middleware('admin');

Route::get('/Admin/candidates', 'AdminController@candidates')->middleware('admin');
Route::get('/Admin/{id}/candidatestupdate', 'AdminController@cand_update')->middleware('admin');

Route::get('/Admin/employer', 'AdminController@employer')->middleware('admin');
Route::get('/Admin/{id}/employestupdate', 'AdminController@emp_update')->middleware('admin');


Route::get('/waiting', 'AdminController@waiting')->name('waiting');