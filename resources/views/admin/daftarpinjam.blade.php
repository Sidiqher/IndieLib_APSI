@extends('layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <h1 class="mb-5">Daftar Peminjam</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 mb-3">
            <form action="{{ route('daftarpeminjaman.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search by title.." name="title" value="{{ request('title') }}">
                    <input type="text" class="form-control" placeholder="Search by NIM/NIP peminjam" name="nim-nip" value="{{ request('nim-nip') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if($daftarpinjam->isEmpty())
        <h3 >Peminjaman tidak ditemukan.</h3>
    @else

        @foreach ($daftarpinjam as $item)
            @if($item->katalog->status === 1)
                <article class="mb-20">
                    <h3>{{ $item->katalog->buku->title }}</h3>
                    <p>Penulis : {{ $item->katalog->buku->penulis }}</p>
                    <p>Kategori  <a href="/buku?category={{ $item->katalog->buku->category->slug }}" class="text-decoration-none">{{ $item->katalog->buku->category->name }}</a></p>
                    <p>Peminjam : {{ $item->user->name }} - ({{ $item->user['nim-nip'] }})</p>
                    <p>Id buku : {{ $item->katalog->id }}</p>
                    <p>Tanggal pengajuan peminjaman : {{ $item->created_at }}</p>
                    <form action="{{ route('daftarpeminjaman.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="katalog_id" value="{{ $item->katalog_id }}">
                        <button type="submit" class="btn btn-primary">Konfirmasi Pengembalian</button>
                    </form>
                    </article>
                </article>
                <hr>
            @endif
        @endforeach
    @endif
    {{ $daftarpinjam->links() }}
@endsection
