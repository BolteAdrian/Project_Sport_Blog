@extends('layouts.app')

@section('title', '| Handball')

@section('content')
    
<h1>Handball</h1>
	

    @if(count($post_handball) > 0 )
        @foreach($post_handball as $post)
       @if($post->name=="Handball")
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

	

