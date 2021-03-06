@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <!--<div class="col-md-4 col-sm-4">-->
                    <div class="col-xs-5">   

                    <!--<img style="width:100%" src="/storage/user_images/"> -->
                    <img style="width:70px" src="/storage/user_images/{{$post->user_image}}">
                    </div>
                    <!--<div class="col-md-8 col-sm-8">-->
                    <div class="col-xs-7">
                            <h3><a href="/posts/{{$post->id}}" style="color: #ffff1a;">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            
                
            </div>
            <br>
            
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found!</p>
    @endif
@endsection