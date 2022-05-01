@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Welcome To Sport Universe!</h1>


</div>

<div class="home-page">

   
        <h1>Last news!</h1>
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="/storage/cover_images/{{$post->cover_image}}"alt="" padding: 5px; style="width:150px;height:90px;border:3px solid purple; vertical-align:middle;margin:0px 50px">
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>No posts found</p>
        @endif
    
    

</div>
@endsection