@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-3">Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            {{-- <div class="well"> --}}
            <div class="col-md-12">
                <div class="h-100 mt-3 p-4 bg-light border rounded-3">
                    <div class="row">
                        <div class="col-md-4 clo-sm-4">
                            <img src="/storage/cover_images/{{$post->cover_image}}" style="width: 100%;">
                        </div>
                        <div class="col-md-8 clo-sm-4">
                            <h3><a href="/posts/{{$post->id}}" style="font-weight: bold; text-decoration: none; color:rgb(27, 27, 27)">{{ $post->title }}</a></h3>
                            <small>Written on {{ $post->created_at }} by {{$post->user->name}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-5 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    @else
        <p>No posts found!</p>
    @endif
@endsection
