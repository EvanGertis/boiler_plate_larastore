@extends('layouts.app')

@section('content')
    <h1>Edit blog post</h1>
    <form method="post" action="/blog/{{$blog->id}}">
        {{method_field('PATCH')}}
        {{ csrf_field() }}
        <div class = "card">
            <li><input type = "text" value= "{{ $blog->author }}" name="author" required/></li>
            <li><input type = "text" value= "{{ $blog->title }}" name="title" required/></li>
            <li><textarea name="post" required>{{ $blog->post }}</textarea></li>
            <li>{{ $blog->created_at }}</li>
            <input type="submit" value="update">
        </div>
    </form>
    <form method="POST" action="/blog/{{$blog->id}}">
        {{method_field('DELETE')}}
        {{ csrf_field() }}
        <input type="submit" value="delete"/>
    </form>
@endsection
