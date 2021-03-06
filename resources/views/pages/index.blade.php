@extends('layouts.app')

@section('content')
    <div class="p-3 mt-4 mb-4 bg-light rounded text-center">
        <div class="container-fluid py-5">
            <h1 class="index-h1">Dev.Talks</h1>
            <p class="index-p">
                <span style="font-weight: 600;">Dev.Talks</span> is a personal blog for developers, where you can share your <span style="font-weight: 600;">technical knowledge</span>, <span style="font-weight: 600;">new
                technologies</span> & <span style="font-weight: 600;">any usefull things related to developments.</span> And you can learn more about the different
                technologies & find answers to your <span style="font-weight: 600;">technical problems.</span>
            </p>
            <p class="mt-5">
                {{-- <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> --}}
                <a class="btn btn-secondary btn-lg rounded-pill px-4" href="/posts" role="button">Strat Reading</a>
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
@endsection
