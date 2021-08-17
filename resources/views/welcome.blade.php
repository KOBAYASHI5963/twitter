@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            <a href="{{route ('signup.get')}}">sign up now!!</a>
        </div>
    </div>
@endsection