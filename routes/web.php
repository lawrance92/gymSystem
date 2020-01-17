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

Route::get('/', 'IndexController@create');

Route::get('/404.html', function () {
    return view('404');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/gym-classes.html', function () {
    return view('gym-classes');
});

Route::get('/martial-arts.html', function () {
    return view('martial-arts');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/index.html', 'IndexController@create');

Route::get('/trainers.html', function () {
    return view('trainers');
});

Route::get('/register.html', function () {
    return view('register');
});

Route::post('memberregister', 'MemberRegisterController@store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
