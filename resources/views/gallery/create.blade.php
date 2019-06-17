@extends('layouts.app')

@section('content')

    <form action="/gallery-photos" method="post" >
        {{ csrf_field() }}

        <input type="file" name="image"/>
        <button type="submit">upload image</button>

    </form>

@endsection
