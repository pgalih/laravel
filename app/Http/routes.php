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
Route::get('/admin', function () {
    return view('dashboard/dashboard');
});

Route::get('/admin/roles', 'RolesController@index');
Route::get('/admin/roles/add', 'RolesController@create');
Route::post('/admin/roles/post', 'RolesController@store');

Route::get('/admin/users', function () {
    return view('');
});

Route::get('/admin/tasks', 'TasksController@index');
Route::get('/admin/tasks/add', 'TasksController@create');
Route::get('/admin/add', 'TasksController@create');
Route::post('/admin/post', 'TasksController@store');
Route::delete('/admin/tasks/delete', 'TasksController@destroy');
Route::delete('/admin/tasks/{id}/delete','TasksController@destroy');
Route::delete('/admin/tasks/$tasks->id', 'TasksController@destroy');