@extends('layouts.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>



<div class="row justify-content-center">
    <div class="col-md-6 mb-3">
        <form action="/buku">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>


@if ($e_book->count())
 
        {{ $e_book->links() }}
        
        @foreach ($e_book->chunk(3) as $chunk)
        <div class="container">
            <div class="row">
                @foreach ($chunk as $e_book)
                <div class="col-md-4 mb-3">
                    <div class="card">


        <div class="card-body">
            <a href="/book/{{ $e_book->slug }}" class="text-decoration-none text-dark">
                <h5 class="card-title">{{ $e_book["title"] }}</h5>
            </a>
            <p>
                <small class="text-body-secondary">
                    Penulis : {{ $e_book->penulis }}
                </small>
            </p>
            <p>
            <small class="text-body-secondary">
                Tahun : {{ $e_book->tahun }}
            </small>
            </p>
            <p>
            <small class="text-body-secondary">
                Penerbit : {{ $e_book->penerbit }}
            </small>
            </p>
            <p>
            <small class="text-body-secondary">
                
                    Kategori : <a href="/buku?category={{ $e_book->category->slug }}" class="text-decoration-none">{{ $e_book->category->name }}
                </a>
                </small>
            </p>
            <a href="/book/{{ $e_book['slug'] }}" class="btn btn-primary">Read more</a>
        </div>
    </div>
    </div>
@endforeach
</div>
</div>
@endforeach



@else
<p class="text-center fs->4">No Book Found.</p>
@endif


@endsection
