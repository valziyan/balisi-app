<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'test';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
