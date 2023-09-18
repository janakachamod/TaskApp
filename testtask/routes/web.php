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
    $data=App\Task::all();
    return view('dailytask')->with('tasks',$data);
});

Route::post('/savetask','TaskController@store');

Route::get('/markascompleted/{id}','TaskController@updatetask');