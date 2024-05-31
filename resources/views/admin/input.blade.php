@extends('layouts.main')

@section('container')
<main class="form-signin w-100 m-auto">

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

  <form action="{{ route('input.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Input data buku </h1>

    <div class="form-floating">
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="title" required value="{{ old('title') }}">
      <label for="title">Judul</label>
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror" id="penulis" placeholder="Penulis" value="{{ old('penulis') }}">
      <label for="penulis">Penulis</label>
      @error('penulis')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" placeholder="Tahun" value="{{ old('tahun') }}">
      <label for="tahun">Tahun</label>
      @error('tahun')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror" id="penerbit" placeholder="Penerbit" value="{{ old('penerbit') }}">
      <label for="penerbit">Penerbit</label>
      @error('penerbit')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" value="{{ old('slug') }}">
      <label for="slug">Slug</label>
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-floating">
    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category_id">
      <option value="">Pilih Kategori</option>
      <option value= "1" >Semester 1</option>
      <option value= "2" >Semester 2</option>
      <option value= "3" >Semester 3</option>
      <option value= "4" >Semester 4</option>
      <option value= "7" >Umum</option>
    </select>
    <label for="category_id">Kategori</label>
        @error('category_id')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
    <!-- <div class="mb-3 mt-3">
      <label for="file" nama="file" class="form-label @error('file') is-invalid @enderror">Input file</label>
      @error('file')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      <input class="form-control" type="file" id="file" name="file" accept="application.pdf">
    </div> -->

    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Usulkan E-book</button>


  </form>
</main>
@endsection