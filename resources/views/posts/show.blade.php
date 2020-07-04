@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary text-light">Go Back</a>

    <h1>{{$post->title}}</h1>
    
        
    <p><h5>{{$post->body}}</h3></p>
                    
    
    <hr>
    <small>Written on {{$post->created_at}}</small>

    

@endsection