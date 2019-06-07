@extends('layouts.app')

@section('content')
    <h1>Blog Page</h1>
    <a href="{{ route('blog.create') }}">Create new blog post</a>
    <ul>
        @foreach($blogs as $blog)
            <div class = "card">
                <li>{{ $blog->author }}</li>
                <li>{{ $blog->title }}</li>
                <li>{{ $blog->post }}</li>
                <li>{{ $blog->created_at }}</li>
            </div>
        @endforeach
    </ul>


@endsection
