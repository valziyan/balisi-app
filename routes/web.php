<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Item;


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

    $categories = Category::all();
    // Select * from categories where name = 'components'

    foreach($categories as $category) {
        echo 'ID: ' . $category->id . 'Name: ' . $category->name . '<br>';
        echo 'items: ' .'list of items <br>';
        $items = $category->items()->get();
        // print_r($items);
        foreach($items as $item) {
            echo 'items: ' . $item->name;
        }
    }

    // print_r(Category::all());
});

Route::get('/items', function () {

    $items = Item::all();

    foreach($items as $item) {
        echo 'ID: ' . $item->id . 'Name: ' . $item->name . '<br>';
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
