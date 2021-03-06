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


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('joblist', 'JobController@index')->name('JobList')->middleware('auth');
Route::post('filterData', 'JobController@filterData')->name('filterData')->middleware('auth');
Route::post('searchFilter', 'JobController@searchFilter')->name('searchFilter')->middleware('auth');
Route::get('jobDetails/{id}', 'JobController@jobDetails')->middleware('auth');
Route::get('jobDestroy/{id}', 'JobController@destroy')->middleware('auth');
Route::get('sendNofication/{id}', 'ApplyController@sendNofication')->name('sendNofication')->middleware('auth');
Route::get('clearNotificaton', 'NotificationController@clearNotificaton')->name('clearNotificaton')->middleware('auth');
Route::get('addJob', 'JobController@show')->middleware('auth');



Route::get('/registerindex', 'RegisterIndex@index');
Route::resource('Apply', 'ApplyController');
Route::resource('jobs', 'JobController');
Route::resource('notification', 'NotificationController');
Route::get('/sentapply', 'ApplyController@create')->middleware('auth');
