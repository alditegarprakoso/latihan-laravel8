@extends('layouts.main')

@section('main')
    <h1 class="mb-5">Halaman Kategori {{ $category }}</h1>
    @foreach ($posts as $post)
        <div class="my-3 border-bottom">
            <h3>
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h3>
            <small>
                By: <a href="#">{{ $post->user->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </small>
            <p>{{ $post->excerpt }}</p>
            <div class="my-2"><a href="/blog/{{ $post->slug }}">read more...</a></div>
        </div>
    @endforeach

    <p><a href="/categories">Back to Categories</a></p>

@endsection
