@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-5">Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group mb-3">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    </div>
    <div class="form-group mb-3">
        {{ Form::label('body', 'Body') }}
        {{ Form::textarea('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    <div class="d-flex justify-content-end">
        {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    </div>
    {!! Form::close() !!}
@endsection
