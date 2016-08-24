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
use App\Task;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@create');
Route::get('/logout', 'LoginController@destroy');
Route::post('/login','LoginController@store');


Route::get('/admin', function () {
    return view('dashboard/dashboard');
});

Route::get('/admin/roles', 'RolesController@index');
Route::get('/admin/roles/add', 'RolesController@create');
Route::post('/admin/roles/post', 'RolesController@store');
Route::put('/admin/roles/update/{id}', 'RolesController@update');
Route::post('/admin/roles/post', 'RolesController@store');
Route::delete('/admin/roles/delete/{id}', 'RolesController@destroy');



Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
	    
	Route::get('/tasks','TasksController@index');
	Route::get('/tasks/add', 'TasksController@create');
	Route::get('/add', 'TasksController@create');
	Route::post('/post', 'TasksController@store');
	Route::delete('/tasks/delete', 'TasksController@destroy');
	Route::delete('/tasks/{id}/delete','TasksController@destroy');
	Route::delete('/tasks/{task}', 'TasksController@destroy');
	Route::get('/tasks/edit/{id}', 'TasksController@edit');
	Route::put('/tasks/update/{id}', 'TasksController@update');
	Route::get('/users','UsersController@index');
	Route::put('/tasks/update/{id}', 'UsersController@update');
	Route::post('/users/post', 'UsersController@store');
	Route::delete('/users/delete/{id}', 'UsersController@destroy');
	Route::get('/profile', 'UsersController@profile');

    
});
