@extends('layout.main')

@section('content')
    <h1>Registration Page</h1>
    <form method="post" action="{{route('register.store')}}">
        @csrf
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
         
        Email: <input type="email" name="email" class="form-control">
        Password: <input type="password" name="password" class="form-control">
        Confirm Password: <input type="password" name="password_confirmation" class="form-control">
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
@endsection