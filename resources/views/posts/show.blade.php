@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary text-light">Go Back</a>

    <h1>{{$post->title}}</h1>
    
        
    <p><h5>{{$post->body}}</h3></p>
                    
    
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    {{-- edit  --}}
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    <br><br>
    
    {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=> 'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}

@endsection