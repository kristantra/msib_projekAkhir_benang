@extends('partials.navbar')
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

{{-- <!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Aneka Benang</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>

  <body>
    <!--Menginputkan Navbar-->
    @include('partials.navbar')

    <!--Ini Untuk Container Iklan--->
    <div class="container-iklan">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <!--Aset Iklan Page--->
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

        <!--Asset Button next-previous iklan--->
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

  <footer>
      <div class="container">
          <div class="row" style="margin-top: 10px;">
              <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                  <ul class="contact">
                      <span style="margin-bottom: 1px;">Contact Us</span>    
                      <form class="form-horizontal" method="POST" action="/contact" style="margin-left: 15px;">
  
                        {{ csrf_field() }}
                            
                        <div class="form-group">
                        <label for="Name">Name: </label>
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                        </div>
                        <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                        <label for="message">Message: </label>
                        <textarea type="text" class="form-control" id="message" placeholder="Enter your message here" name="message" required> </textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary" value="Send" style="margin-bottom: 10px;">Send</button>
                        </div>
                      </form>
                </ul>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <ul class="adress">
                      <span>Operation Time</span>    
                      <li>
                        <p>Senin - Jumat</p>
                        <p>08.00 - 17.00</p>
                      </li>
                  </ul>
              </div>
        
              <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                  <ul class="social">
                    <span>Social</span>    
                    <li>
                          <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                    </li>
                    
                    <li>
                          <a href="#"><i class="fa fa-github fa-2x"></i></a>
                    </li>
                      
                    <li>
                          <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                    </li>
                    
                    <li>
                          <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                    </li>
                      
                    <li>
                          <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                    </li>
                  </ul>
              </div>
        </div> 
      </div>
  </footer>

  <style>
  body {
          background-color: white; 
          width: 100%;
          font-family:Roboto;
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

  footer{
      background-color: rgba(219, 234, 247, 0.938);
      padding:5px 0px;
      margin-top:10px; 
  }	       

  footer ul li{
      padding:5px 0px;
  }

  .adress span , .contact span , .social span{
    color: #0b0b0b; 
    font-weight: 100; 
    padding-bottom: 10px; 
    /* margin-bottom: 10px; */
    display: block;
    text-transform: uppercase;
    font-size: 20px;
    letter-spacing: 3px;
  }
  
  .adress li p , .contact li p , .social li a{
      color:#070707;
      letter-spacing: 2px;
      text-decoration:none;
      font-size:15px;
  }

  .social li{
      float:left;
  }

  .adress , .contact , .social {
      list-style: none;
  }

  .fa{
      color:#090909;
      margin-right: 15px;
      font-size:14px;
  }
  </style>
</html> --}}