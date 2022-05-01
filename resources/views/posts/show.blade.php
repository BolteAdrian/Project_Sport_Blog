@extends('layouts.app')

@section('content')
<div class="home-page">
    
    <a href="/posts" class="btn btn-primary">Go Back</a>
   
    <h1 class="well" align="center" style="margin:50px 100px">{{$post->title}}</h1>

  
    @if($post->cover_image != "noimage.jpg" && $post->cover_image != "null")
    <img src="/storage/cover_images/{{$post->cover_image}}"   style="width:500px;height:200px; vertical-align:middle;margin:-10px 550px">

    @endif
    <br><br>
    
    <div class="well" style="margin:200px 100px">
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    </hr>
    <div style="margin:50px 100px">
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif
    @endif

</div>
</div>

@endsection