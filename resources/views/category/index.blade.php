@extends('layout.main')

@section('title')
List of categories
@endsection

@section('content')
    <h1>List of Categories</h1>
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Add new Category</a>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection