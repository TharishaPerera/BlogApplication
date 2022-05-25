@extends('layouts.app')

@section('content')
    <div class="p-3 mt-4 mb-4 bg-light rounded text-center">
        <div class="container-fluid py-5">
            <h1 class="index-h1">Dev.Talks</h1>
            <p class="index-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, dolor eligendi.
                Provident, impedit alias quae
                at,
                esse reiciendis quos assumenda distinctio cumque quia illum voluptas iure cum vero fugit beatae?</p>
            <p class="mt-5">
                {{-- <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> --}}
                <a class="btn btn-secondary btn-lg rounded-pill" href="/posts" role="button">Strat Reading</a>
            </p>
        </div>
    </div>

    
    <div>
        @if (count($posts) > 0)
        <div class="p-3 mt-4 mb-4 text-center bg-light">
            <h3>Recent Posts</h3>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($posts as $post)
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="/storage/cover_images/{{ $post->cover_image }}" style="width: 100%;">
                        <div class="card-body">
                            <h3><a href="/posts/{{ $post->id }}"
                                    style="text-decoration: none; color:rgb(27, 27, 27)">{{ $post->title }}</a></h3>
                            <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>

    {{-- <div>
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="col-md-12">
                    <div class="h-100 mt-3 p-4 bg-light border rounded-3">
                        <div class="row">
                            <div class="col-md-4 clo-sm-4">
                                <img src="/storage/cover_images/{{ $post->cover_image }}" style="width: 100%;">
                            </div>
                            <div class="col-md-8 clo-sm-4">
                                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No posts found!</p>
        @endif
    </div> --}}
@endsection
