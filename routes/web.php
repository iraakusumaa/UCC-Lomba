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

Route::get('/login', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');

Route::get('/register', function () {
    if(Auth::check()){
        return redirect('/dashboard');
    }
    return view('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});



Route::post('/login', 'UserController@login');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/');
});

Route::post('/register', 'UserController@register');

Route::middleware(['auth'])->group(function(){
    Route::get('/user', function(){
        return view('user');

    });

    Route::get('/admin', function(){
        $role= Auth::user()->role;
        if($role != 'admin'){
            return 'kowe rak entuk mlebu';
        }
        return view('admin.index');

    });

    Route::get('lomba', 'LombaController@index');
    Route::get('lomba/add', 'LombaController@add');
    Route::post('lomba', 'LombaController@create');

    //EDIT
    Route::get('lomba/{id}/edit', 'LombaController@edit');
    Route::post('lomba/{id}/edit', 'LombaController@update');

    //DELETE
    Route::get('lomba/{id}/delete', 'LombaController@delete');
    Route::get('lomba/{id}/confirmDelete', 'LombaController@confirmDelete');
});


Route::get('lomba/{id}', 'LombaController@detail');





