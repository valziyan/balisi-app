<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

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

Route::get('/categories', function () {

    $categories = Category::where('name', 'components')->get();
    // Select * from categories where name = 'components'

    foreach($categories as $category) {
        echo 'ID: ' . $category->id . 'Name: ' . $category->name . '<br>';
    }

    // print_r(Category::all());
});

Route::get('/login', function () {

    $categories = Category::where('name', 'components')->get();

    return view('login', ['categories' => $categories]);
});

Route::get('/register', function () {
    return view('register',);
})->name('register');
