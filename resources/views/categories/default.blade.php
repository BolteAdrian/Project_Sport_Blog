@extends('layouts.app')

@section('title', '| default')

@section('content')


<div class="home-page">

    <h1>{{$name}}</h1>


    @if(count($post_default) > 0 )
    @foreach($post_default as $post)

    <div class="well">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style="width:50%" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>


            </div>
        </div>
    </div>

    @endforeach

    @else
    <p>No posts found</p>
    @endif

</div>




@endsection