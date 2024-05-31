<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">PSTI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/e-book2">E-Book</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="/pengajuan">Pengajuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categories">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/peminjaman">Log Peminjaman</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item" >Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="navbar-item">
            <a href="/signin" class="nav-link" ><i class="bi bi-box-arrow-right"></i> Login</a>
          </li>
          @endauth
        </ul>

    </div>
  </div>
</nav>