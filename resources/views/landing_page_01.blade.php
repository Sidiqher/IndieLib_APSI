<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  </head>
  <body>
    <div class="home">
      <div class="sidebar">
        <div class="title-1">
        Pengelolaan E-book<br />
        PSTI
        </div>
        <div class="list">
          <div class="menu-item">
            <span class="discover">
            Discover
            </span>
          </div>
          <div class="menu-item-1">
            <img class="home-1" src="../assets/vectors/home_1_x2.svg" />
            <span class="home-2">
            <a class="nav-link active" href="/"> Home </a>
            </span>
          </div>
          <div class="menu-item-2">
            <img class="search" src="../assets/vectors/search_1_x2.svg" />
            <span class="ebook">
            <a class="nav-link active" href="/e-book"> E-Book </a>
            </span>
          </div>
          <div class="menu-item-3">
            <img class="radio" src="../assets/vectors/radio_x2.svg" />
            <span class="pengusulan">
            Pengusulan
            </span>
          </div>
        </div>
      </div>
      <div class="title">
        <div class="daftar-ebook">
        Daftar E-book
        </div>
        <span class="subheading">
        Subheading
        </span>
      </div>
      <div class="segmented-control">
        <div class="segmented-control-1">
          <div class="item-1">
            <span class="music">
            Tab
            </span>
          </div>
          <div class="item-2">
            <span class="podcasts">
            Tab
            </span>
          </div>
          <div class="item-3">
            <span class="live">
            Tab
            </span>
          </div>
        </div>
      </div>
      <div class="button">
        <span class="primary">
        Call to action
        </span>
      </div>
    </div>
  </body>
</html>