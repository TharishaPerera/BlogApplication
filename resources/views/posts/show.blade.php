@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end align-items-center mt-2 mb-4">
        <a href="/posts" class="btn btn-secondary ">Go Back</a>
    </div>
    <h1 class="mb-5">{{ $post->title }}</h1>
    <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;">
    <br>
    <br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small class="mt-3">Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>

    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user->id)
            <div class="d-flex justify-content-end align-items-center mt-2 mb-4">
                <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary mx-1">Edit</a>

                {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right mx-1']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            </div>
        @endif
    @endif
@endsection
