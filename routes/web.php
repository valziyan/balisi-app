<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;

// Controllers
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;



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

Route::resource('categories', CategoryController::class)->middleware('auth');
Route::resource('items', ItemController::class);


// Route::get('/login', [LoginController::class, 'show']);

// Route::get('/register', function () {
//     return view('register',);
// })->name('register');

// Auth
Route::resource('register', RegisterController::class);
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');