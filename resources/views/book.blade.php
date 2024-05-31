@extends('layouts.main')

@section('container')

<h1 class="mb-5">Halaman Buku Pilihan</h1>

<article class="mb-20">
    <h2>{{ $e_book["title"] }}</h2>
    <p>
            Penulis : {{ $e_book->penulis }}
    </p>
    <p>
            Tahun : {{ $e_book->tahun }}
    </p>
    <p>
    Kategori : <a href="/buku?category={{ $e_book->category->slug }}" class="text-decoration-none"> {{ $e_book->category->name }} </a>
    </p>
    <p>
            Jumlah tersedia : {{ $jumlahTersedia }}

    </p>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/peminjaman" method="post">
    @csrf
    <input type="hidden" name="buku_id" value="{{ $e_book->id }}">
    <button type="submit" class="btn btn-primary">Ajukan Peminjaman</button>
    </form>

    @can('admin')
    <form action="{{ route('tambahcopy.store') }}" method="POST">
        @csrf
        <input type="hidden" name="tambahcopy" value="{{ $e_book->id }}">
        <button type="submit" class="btn btn-primary mt-3">Tambah Copy</button>
    </form>
@endcan
</article>

@endsection
