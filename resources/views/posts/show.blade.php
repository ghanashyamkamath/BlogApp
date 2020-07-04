@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div class="card text-dark">
        
        <p><h5>{{$post->body}}</h3></p>
                    
    
    <hr>
    <small class="text-dark">Written on {{$post->created_at}}</small>

    </div>

@endsection