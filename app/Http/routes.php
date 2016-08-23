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

Route::get('/admin/users', function () {
    return view('');
});

Route::get('/admin/tasks',['middleware' => 'auth', 'uses' => 'TasksController@index']);
Route::get('/admin/tasks/add', 'TasksController@create');
Route::get('/admin/add', 'TasksController@create');
Route::post('/admin/post', 'TasksController@store');
Route::delete('/admin/tasks/delete', 'TasksController@destroy');
Route::delete('/admin/tasks/{id}/delete','TasksController@destroy');
Route::delete('/admin/tasks/{task}', 'TasksController@destroy');
Route::get('/admin/tasks/edit/{id}', 'TasksController@edit');
Route::put('/admin/tasks/update/{id}', 'TasksController@update');

Route::get('/admin/users',['middleware' => 'auth', 'uses' => 'UsersController@index']);
Route::put('/admin/tasks/update/{id}', 'UsersController@update');
Route::post('/admin/users/post', 'UsersController@store');
Route::delete('/admin/users/{id}', 'UsersController@destroy');
