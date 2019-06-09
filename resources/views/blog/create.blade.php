@extends('layouts.app')

@section('content')
    <h1>Create Blog Page</h1>

        <form method="post" action="/blog">
            {{ csrf_field() }}
            <div>
                <input type="text" placeholder="author" name="author" value="{{ old('author')}}" required>
            </div>
            <div>
                <input type="text" placeholder="title" name="title" value="{{ old('title')}}" required>
            </div>
            <div>
                <textarea placeholder="post" name="post" required>{{ old('post')}}</textarea>
            </div>
            <div>
                <input type="submit" >
            </div>

            @if ($errors->any())
            <div class="danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>

@endsection
