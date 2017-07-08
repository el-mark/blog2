<?php

// Undersanding providers
// $stripe = app('App\Billing\Stripe');

// dd($stripe);


Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::get('/posts/{post}/delete', 'PostsController@destroy');

Route::post('/posts/{post}/comments', 'CommentsController@store');


Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');



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
