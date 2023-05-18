@extends('app')

@section('title', 'Homepage')

@section('content')
    <style>
        body {
            background-color: white; 
            width: 100%;
        }
        .container-iklan { 
            margin-top: 20px;
            width: 100%; /* Atur lebar kontainer sesuai kebutuhan */
            height: 300px; /* Atur tinggi kontainer sesuai kebutuhan */
            position: relative;
            overflow: hidden;
            background-color: rgb(251, 252, 250); 
            }
      
        .container-iklan img {
            width: 100%;
            height: 300px;
        }

        .container-product img {
            /* width: 100%;
            height: 300px; */
        }
      </style>
    <body>
    <div class="container-iklan">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="4000">
            <div class="card text-bg-dark">
              <img src="{{ asset('assets/model 1.png') }}" class="card-img" alt="...">
              <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small>Last updated 3 mins ago</small></p>
              </div>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="3000">
            <img src="{{ asset('assets/model 1.png') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('assets/model 2.png') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black;"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

    <div class="container-product" style="margin-top: 20px;">
        <h1 style="margin-left: 38%;">Best Seller</h1>
        <div id="carouselExampleInterval1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="4000">
                <div class="row">
                  <div class="col">
                    <img src="{{ asset('assets/merk 1.1.jpeg') }}" class="d-block w-100" alt="Gambar 1">
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/merk 2.2.jpg') }}" class="d-block w-100" alt="Gambar 2">
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/merk 3.1.jpg') }}" class="d-block w-100" alt="Gambar 3">
                  </div>
                  <div class="col">
                    <img src="{{ asset('assets/merk 4.jpg') }}" class="d-block w-100" alt="Gambar 3">
                  </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('assets/merk 1.1.jpeg') }}" class="d-block w-100" alt="Gambar 1">
                      </div>
                      <div class="col">
                        <img src="{{ asset('assets/merk 2.2.jpg') }}" class="d-block w-100" alt="Gambar 2">
                      </div>
                      <div class="col">
                        <img src="{{ asset('assets/merk 3.1.jpg') }}" class="d-block w-100" alt="Gambar 3">
                      </div>
                      <div class="col">
                        <img src="{{ asset('assets/merk 4.jpg') }}" class="d-block w-100" alt="Gambar 3">
                      </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="color:black;"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
          </div>
          <a class="btn btn-primary" href="#" role="button" style="margin-left: 5px;">Lihat Semua</a>
    </div>
</body>

@endsection
