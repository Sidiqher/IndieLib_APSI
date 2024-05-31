@extends('layouts.main')

@section('container')
<main class="form-signin w-100 m-auto">
<form action="/signup" method="post">
  @csrf
  <h1 class="h3 mb-3 fw-normal">Registration form</h1>
  
  <div class="form-floating">
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
    <label for="name">Nama</label>
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="text"  name="nim-nip" class="form-control mt-2 mb-2 @error('nim-nip') is-invalid @enderror" id="nim-nip" placeholder="Username" required value="{{ old('nim-nip') }}">
    <label for="nim-nip">NIM/NIP</label>
    @error('nim-nip')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="text"  name="no-hp" class="form-control mt-2 mb-2 @error('no-hp') is-invalid @enderror" id="no-hp" placeholder="No. HP" required value="{{ old('no-hp') }}">
    <label for="no-hp">No. HP</label>
    @error('no-hp')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" required value="{{ old('email') }}">
    <label for="email">Email address</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
    <label for="password">Password</label>
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Register</button>
  <smallc class="d-block text-center mt-3">Already registered? <a href="/signin">Sign in</a></small>
  <p class="mt-5 mb-3 text-body-secondary">&copy; 2024</p>
</form>
</main>
@endsection