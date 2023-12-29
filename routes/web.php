<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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
})->name('/');
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
})->name('home')->middleware('auth');

Route::middleware('guest')->group(function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store', [AuthController::class, 'store'])->name('store');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

// admin
Route::get('/admin', function () {
    return view('dashboard.admin.layout.main');
})->middleware('auth');
Route::get('/admin/users', function () {
    return view('dashboard.admin.users.index');
});
Route::get('/admin/genre', function () {
    return view('dashboard.admin.genre.index');
});
Route::get('/admin/users/edit', function () {
    return view('dashboard.admin.users.edit');
});
