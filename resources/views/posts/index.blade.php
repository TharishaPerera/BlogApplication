@extends('layouts.app')

@section('content')
    <h1 class="mt-5 mb-3">Posts</h1>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            {{-- <div class="well"> --}}
            <div class="col-md-12">
                <div class="h-100 mt-3 p-4 bg-light border rounded-3">
                    <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                    <small>Written on {{ $post->created_at }}</small>
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
