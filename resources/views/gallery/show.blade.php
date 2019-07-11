@extends('layouts.app')

@section('content')
    <h1>Gallery Page</h1>
    <a href="gallery/create">upload a new photo</a>

    <img src="images/gallery-image.jpeg" style="width: 100%; height: 100%;">
    @foreach ($images as $image)
    {{-- <img src= "{{ $image->pathname}}" /> --}}
    @endforeach
@endsection
