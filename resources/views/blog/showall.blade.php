@extends('layouts.app')

@section('content')
    <h1>Blog Page</h1>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    @if(auth()->id() == 1)
        <a href="{{ route('blog.create') }}">Create new blog post</a>
    @endif
    <ul>
        @foreach($blogs as $blog)
            <div class = "card">
                <li><a href= 'blog/{{$blog->id}}'>view post</a></li>
                <li>{{ $blog->author }}</li>
                <li>{{ $blog->title }}</li>
                <li>{{ $blog->post }}</li>
                <li>{{ $blog->created_at }}</li>
            </div>
        @endforeach
    </ul>


@endsection
