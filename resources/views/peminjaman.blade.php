@extends('layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <h1 class="mb-5">Halaman Log Peminjaman</h1>
    @if ($peminjaman->filter(fn($item) => $item->status === 1)->isEmpty())
        <h4>Anda sedang tidak meminjam buku apapun.</h4>
    @else
        @foreach ($peminjaman->filter(fn($item) => $item->status === 1) as $item)
            <article class="mb-20">
                <h3>{{ $item->katalog->buku->title }}</h3>
                <p>
                    Penulis : {{ $item->katalog->buku->penulis }}
                </p>
                <p>
                    Tahun : {{ $item->katalog->buku->tahun }}
                </p>
                <p>
                    Kategori : <a href="/buku?category={{ $item->katalog->buku->category->slug }}" class="text-decoration-none">{{ $item->katalog->buku->category->name }}</a>
                </p>
                <p>
                    Tanggal pengajuan peminjaman : {{ $item->created_at }}
                </p>
                <!-- <form action="/peminjaman/kembali" method="post">
                    @csrf
                    <input type="hidden" name="buku_id" value="{{ $item->buku_id }}">
                    <button type="submit" class="btn btn-primary">Ajukan Pengembalian</button>
                </form> -->
            </article>
            <hr>    
        @endforeach
    @endif
@endsection
