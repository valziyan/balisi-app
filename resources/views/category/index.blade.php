@extends('layout.main')

@section('title')
List of categories
@endsection

@section('content')
    <h1>List of Categories</h1>
    <img src="/images/ryan.jpg" width="40">
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Add new Category</a>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)

                <tr>
                    <td>{{ $category->id }}</td>
                    <td>
                        {{ $category->name }}
                        List of items:
                        <ul>
                            @foreach( $category->items as $item )
                            <li>{{ $item->name }}</li>
                            @endforeach
                            
                        </ul>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="{{ route('categories.show', $category->id) }}">View</a>
                        <a class="btn btn-sm btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
@endsection