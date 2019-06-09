@extends('layouts.app')

@section('content')
    <h1>Create Blog Page</h1>

        <form method="post" action="/blog">
            {{ csrf_field() }}
            <div>
                <input type="text" placeholder="author" name="author" required>
            </div>
            <div>
                <input type="text" placeholder="title" name="title" required>
            </div>
            <div>
                <textarea placeholder="post" name="post" required></textarea>
            </div>
            <div>
                <input type="submit" >
            </div>
        </form>

@endsection
