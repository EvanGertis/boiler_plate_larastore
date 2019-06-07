@extends('layouts.app')

@section('content')
    <h1>Blog Page</h1>
    <ul>
        <div class = "card">
            <li>{{ $blog->author }}</li>
            <li>{{ $blog->title }}</li>
            <li>{{ $blog->post }}</li>
            <li>{{ $blog->created_at }}</li>
        </div>
    </ul>


@endsection
