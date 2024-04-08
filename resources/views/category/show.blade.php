@extends('layout.main')

@section('title')
List of categories
@endsection

@section('content')
    <h1>{{ $category->name }}</h1>
@endsection