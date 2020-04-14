@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body','',['id'=> 'article-ckeditor', 'class'=>'ckeditor form-control', 'placeholder' => 'Write here'])}}
        </div>
        <div class="form-group">
                {{Form::file('user_image')}}

        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-secondary'])}}
    {!! Form::close() !!}
@endsection