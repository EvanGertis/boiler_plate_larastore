@extends('layouts.app')

@section('content')

    <form action="/gallery" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <input type="file" name="image"/>
        <button type="submit">upload image</button>

    </form>

@endsection
