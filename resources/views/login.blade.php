@extends('layout.main')

@section('title')
Login Page
@endsection

@section('content')
    <h1>Login Page</h1>
    <form method="post" action="{{route('login')}}">
        @csrf
        Email: <input type="email" name="email" class="form-control">
        Password: <input type="password" name="password" class="form-control">
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection