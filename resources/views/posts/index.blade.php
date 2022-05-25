@extends('layouts.app')

@section('content')
    <div class="row col-md-12">
        <div class="col-md-8" >
            <h1 class="">Posts</h1>
        </div>

        <div class="col-md-4">
            {!! Form::open(['action' => 'App\Http\Controllers\PostsController@index', 'method' => 'GET']) !!}
            <div class="row ">
                <div class="col-md-9" >
                    {{ Form::text('search', $value, ['class' => 'form-control w-100', 'name' => 'search', 'placeholder' => 'Search Blog Posts', ]) }}
                </div>
                <div class="col d-flex justify-content-center" >
                    {{ Form::submit('Search', ['class' => 'btn btn-secondary rounded-pill']) }}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

    @if (count($posts) > 0)
        @foreach ($posts as $post)
            {{-- <div class="well"> --}}
            <div class="col-md-12">
                <div class="h-100 mt-3 p-4 bg-light border rounded-3">
                    <div class="row">
                        <div class="col-md-4 clo-sm-4">
                            <img src="/storage/cover_images/{{ $post->cover_image }}" style="width: 100%;">
                        </div>
                        <div class="col-md-8 clo-sm-4">
                            <h3><a href="/posts/{{ $post->id }}"
                                    style="font-weight: bold; text-decoration: none; color:rgb(27, 27, 27)">{{ $post->title }}</a>
                            </h3>
                            <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="mt-5 d-flex justify-content-center">
            {{ $posts->appends(['search' => request()->query('search') ])->links() }}
        </div>
    @else
        <p>No posts found!</p>
    @endif
@endsection
