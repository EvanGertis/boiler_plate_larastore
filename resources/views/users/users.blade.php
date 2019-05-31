@extends('users.layouts.layout')

@section('content')
    <h1>User page</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>

@endsection
