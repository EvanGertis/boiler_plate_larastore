@extends('layouts.app')

@section('content')
    <h1>Create Blog Page</h1>

        <form method="post" action="/blog">
            {{ csrf_field() }}
            <div>
                <input type="text" placeholder="author" name="author">
            </div>
            <div>
                <input type="text" placeholder="title" name="title">
            </div>
            <div>
                <textarea placeholder="post" name="post"></textarea>
            </div>
            <div>
                <input type="submit" >
            </div>
        </form>

@endsection
