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

Route::get('/', 'PostsController@index');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::get('/posts/{post}/delete', 'PostsController@destroy');

Route::post('/posts/{post}/comments', 'CommentsController@store');




Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');



// All the crud routes
// GET /posts
// GET /posts/create
// POSTS /posts
// GET /posts/{id}/edit
// GET /posts/{id}
// PATCH /posts/{id}
// DELETE /Posts/{id}


// use App\Task;

// Route::get('/tasks', function () {

// 	// $tasks = DB::table('tasks')->get();

// 	$tasks = Task::all();

//     return view('tasks.index', compact('tasks'));

// });

// Route::get('/tasks/{task}', function ($id) {

// 	// $task = DB::table('tasks')->find($id);

// 	$task = Task::find($id);

// 	return view('tasks.show', compact('task'));

// });
