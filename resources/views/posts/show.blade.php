@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mt-3">Go Back</a>
    <h1 class="my-5">{{$post->title}}</h1>

    <div>
        {{$post->body}}
    </div>
    <hr>
    <small class="mt-3">Written on {{$post->created_at}}</small>
@endsection
