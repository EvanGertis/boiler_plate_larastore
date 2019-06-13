@extends('layouts.app')

@section('content')
    <h1>Blog Page</h1>
    <ul>
        <div class = "card">
            @if(auth()->id() == 1)
                <li><a href= "{{$blog->id}}/edit">Edit post</a></li>
            @endif
            <li>{{ $blog->author }}</li>
            <li>{{ $blog->title }}</li>
            <li>{{ $blog->post }}</li>
            <li>{{ $blog->created_at }}</li>
        </div>
    </ul>


@endsection
