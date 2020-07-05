@extends('layouts.app')

@section('content')

    <a href="/posts" class="btn btn-primary text-light">Go Back</a>
    <br><br>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>
    </div>
    
    <br><br>
    
    
        
    <p><h5>{{$post->body}}</h3></p>
                    
    
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    {{-- edit  --}}

    @if(!Auth::guest())
    
        @if (Auth::user()->id == $post->user_id)
            
        
    
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            <br><br>
            
            {!!Form::open(['action' => ['PostsController@destroy',$post->id],'method'=> 'POST','class'=>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
            {!!Form::close()!!}
        
        @endif
    
    @endif

@endsection
