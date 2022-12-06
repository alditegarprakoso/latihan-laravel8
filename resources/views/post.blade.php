@extends('layouts.main')

@section('main')
    <section class="my-5">
        <h3>
            {{ $post->title }}
        </h3>
        <p>Kategori : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
        <p>
            <a href="/blog">Back to Blog</a>
        </p>
    </section>
@endsection
