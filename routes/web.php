<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bestSeller', function () {
    return view('feedback');
});
Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/genre', function () {
    return view('dashboard.user.genre.index');
});
Route::get('/mybook', function () {
    return view('dashboard.user.mybook.index');
});
Route::get('/favorite', function () {
    return view('dashboard.user.favorite.index');
});
Route::get('/home', function () {
    return view('dashboard.user.index');
});
Route::get('/login', function () {
    return view('login.index');
});
Route::get('/register', function () {
    return view('register.index');
});
Route::get('/bestSeller', function () {
    return view('register.index');
});

