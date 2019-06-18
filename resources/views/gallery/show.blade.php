@extends('layouts.app')

@section('content')
    <h1>Gallery Page</h1>
    <a href="gallery/create">upload a new photo</a>

    @foreach ($images as $image)
    {{dd($image)}}
    {{-- <img src= "{{ $image->pathname}}" /> --}}
    @endforeach
@endsection
