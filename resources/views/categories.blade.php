@extends('layouts.main')

@section('main')
    <h1 class="mb-5">Halaman kategori</h1>

    @foreach ($categories as $category)
        <div class="my-3 border-bottom">
            <h3>
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
            </h3>
        </div>
    @endforeach
@endsection
