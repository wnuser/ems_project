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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('profile', 'ProfileController@index')->name('profile');

// manage users routes in admin panel 
Route::get('manage/users', 'Usercontroller@index')->name('manage.users');
Route::get('admin/create/user', 'Usercontroller@create')->name('admin.create.user');
Route::post('admin/save/user', 'Usercontroller@store')->name('admin.save.user');
Route::get('admin/edit/user/{id}', 'Usercontroller@edit')->name('admin.edit.user');
Route::post('admin/update/user', 'Usercontroller@update')->name('admin.update.user');
Route::get('admin/delete/user/{id}', 'Usercontroller@destroy')->name('admin.delete.user');
Route::get('admin/profile', 'AdminController@manageProfile')->name('admin.profile');
Route::post('admin/update/profile', 'AdminController@updateProfile')->name('admin.update.profile');

Route::get('admin/change/password', 'AdminController@changePassword')->name('admin.change.password');
Route::post('admin/save/password',  'AdminController@savePAssword')->name('admin.save.password');


/**
 * Experiments routes 
 */
Route::get('experiment/{id}', 'ExperimentController@experiment')->name('experiment');
Route::get('actophotometer', 'ExperimentController@actophotometer')->name('actophotometer');


