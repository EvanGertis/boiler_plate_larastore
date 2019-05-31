@extends('users.layouts.layout')

@section('content')
    <h1>Create a new user</h1>
    <form action="/users" method="POST">
        {{ csrf_field() }}
        <div>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
@endsection
