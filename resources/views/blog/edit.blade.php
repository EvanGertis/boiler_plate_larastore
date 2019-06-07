@extends('layouts.app')

@section('content')
    <h1>Edit blog post</h1>
    <div class = "card">
        <li>{{ $blog->author }}</li>
        <li>{{ $blog->title }}</li>
        <li>{{ $blog->post }}</li>
        <li>{{ $blog->created_at }}</li>
    </div>
@endsection
