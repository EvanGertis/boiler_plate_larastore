@extends('layouts.app')

@section('content')
    <h1>Edit blog post</h1>
    <form method="post" action="/blog">
        {{ csrf_field() }}
        <div class = "card">
            <li><input type = "text" value= "{{ $blog->author }}" name="author"/></li>
            <li><input type = "text" value= "{{ $blog->title }}" name="title"/></li>
            <li><textarea name="post">{{ $blog->post }}</textarea></li>
            <li>{{ $blog->created_at }}</li>
            <input type="submit" value="update">
            <input type="submit" value="delete">
        </div>
    </form>
@endsection
