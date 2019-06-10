@extends('layouts.app')

@section('content')
    <h1>Contacts Page</h1>
    <form method="post">
        <input type="text" placeholder="name" name="name"/>
        <input type="email" placeholder="email" name="email"/>
        <textarea name="message" placeholder="message"></textarea>
        <input type="submit">
    </form>
@endsection
