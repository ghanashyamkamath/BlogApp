@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store','method'=> 'POST']) !!}
    {{-- title  --}}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control','placeholder'=>'Title'])}}

    </div>

    {{-- body  --}}

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=> 'form-control','placeholder'=>'Type your text here'])}}

    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection