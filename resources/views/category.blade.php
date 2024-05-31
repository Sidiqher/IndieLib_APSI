@extends('layouts.main')

@section('container')



<h1>Halaman Category : {{$category}}</h1>

<div style="margin: 20px;">
    @foreach ($Buku as $e_book)
    <article class="mb-5">
        <h2>
            <a href="/buku/{{ $e_book['slug'] }}">{{ $e_book["title"] }}</a>
        </h2>
        
        <p>By <a href="/penulis/{{$e_book->penulis->username }}" class="text-decoration-none">{{ $e_book->penulis->name }}</a> in <a href="/categories/{{ $e_book->category->slug }}" class="text-decoration-none">{{ $e_book->category->name }}</a></p>
        <p>{{ $e_book["excerpt"] }}</p>
        <p>{{ $e_book["excerpt"] }}</p>
    </article>
    @endforeach
</div>


@endsection
