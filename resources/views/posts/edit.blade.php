@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {!! Form::open(['action' => ['PostsController@update',$post->id],'method'=> 'POST']) !!}
    {{-- title  --}}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=> 'form-control','placeholder'=>'Title'])}}

    </div>

    {{-- body  --}}

    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$post->body,['class'=> 'form-control','placeholder'=>'Type your text here'])}}

    </div>

    {{Form::hidden('_method','PUT')}}

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


@endsection
