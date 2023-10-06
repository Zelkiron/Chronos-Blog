<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
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

/* BLOGS */

Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/new', [BlogController::class, 'create'])->name('blog.create');

Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blog/{blog}/edit', [BlogController::class, 'edit'])->name('blog.edit');

Route::put('/blog/{blog}', [BlogController::class, 'update'])->name('blog.update');

Route::delete('/blog/{blog}/destroy', [BlogContrller::class, 'destroy'])->name('blog.destroy');

/* USERS */

Route::get('/users', [UserController::class, 'index'])->name('user.index');

Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('/register', [UserController::class, 'create'])->name('user.create');

Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::get('/login', [UserController::class, 'showLogin'])->name('user.showLogin');

Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/user/{user}/edit', [UserController::class, 'create'])->name('user.create');

Route::put('/user/{user}', [UserController::class, 'edit'])->name('user.edit');

Route::delete('/user/{user}/destroy', [UserController::class, 'destroy'])->name('user.destroy');


/* 
INDEX - all listings
SHOW - single listing
CREATE - create new listing
STORE - store new listing
EDIT - edit listing
UPDATE - update listing
DESTROY - delete listing
*/