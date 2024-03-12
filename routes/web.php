<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Item;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;


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

Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);


Route::get('/login', function () {

    $categories = Category::where('name', 'components')->get();

    return view('login', ['categories' => $categories]);
});

Route::get('/register', function () {
    return view('register',);
})->name('register');
