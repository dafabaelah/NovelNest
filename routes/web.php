<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::middleware(['guest', 'role:guest'])->group(function() {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/store', [AuthController::class, 'store'])->name('store');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth', 'role:user'])->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/admin/users', [AdminController::class, 'userIndex'])->name('userIndex');
    Route::get('/admin/users/edit', [AdminController::class, 'userEdit'])->name('userEdit');
    Route::get('/admin/users/create', [AdminController::class, 'userCreate'])->name('userCreate');
});

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin/users', 'userIndex')->name('userIndex');
    Route::get('/admin/users/edit', 'userEdit')->name('userEdit');
    Route::get('/admin/users/create', 'userCreate')->name('userCreate');
    Route::get('/admin/genre', 'genreIndex')->name('genreIndex');
    Route::get('/admin/genre/edit', 'genreEdit')->name('genreEdit');
    Route::get('/admin/genre/create', 'genreCreate')->name('genreCreate');
    Route::get('/admin/genre/delete', 'genreDelete')->name('genreDelete');
    Route::get('/admin/genre/update', 'genreUpdate')->name('genreUpdate');
    Route::get('/admin/genre/store', 'genreStore')->name('genreStore');
});