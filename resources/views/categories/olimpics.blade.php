@extends('layouts.app')

@section('title', '| Olimpics')

@section('content')
    
<h1>Olimpics</h1>
	

    @if(count($post_olimpics) > 0 )
        @foreach($post_olimpics as $post)
       @if($post->name=="Olimpics")
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
            @endif
        @endforeach
       
    @else
        <p>No posts found</p>
    @endif


@endsection

	

