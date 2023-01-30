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

Route::get('/', 'HomeController@index');

Route::get('tasks', 'TaskController@index');
Route::post('tasks', 'TaskController@store');
Route::get('tasks/{task}', 'TaskController@show');
Route::get('tasks/{task}/edit', 'TaskController@edit');
Route::post('tasks/{task}/edit', 'TaskController@update');

// Route::get('/about', 'PageController@about');
// Route::get('/contact', 'PageController@contact');

// Route::get('/', function () {
//     $name = '<span class="text-danger">Fawwaz</span>';
//     $tasks = ['Kuliah', 'Buat Tutorial', 'Tidur'];

//     return view('welcome', [
//         'name' => $name,
//         'tasks' => $tasks
//     ]);
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/other', function () {
//     return view('other');
// });
