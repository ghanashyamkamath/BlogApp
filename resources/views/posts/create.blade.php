@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {!! Form::open(['action' => 'PostsController@store','method'=> 'POST','enctype'=>'multipart/form-data']) !!}
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

    {{-- image --}}
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{-- submitting  --}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection