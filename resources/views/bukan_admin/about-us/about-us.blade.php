@extends('partials.navbar')

@section('title', 'About Us')

@section('content')
  <style>
    body {
      background-color: #f9f9f9;
    }

    .about-us {
      max-width: 800px;
      margin: 0 auto;
      padding: 40px;
      text-align: center;
    }

    .card {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      align-items: center;
      overflow: hidden;
    }

    .card-image {
      flex: 40%;
    }

    .card-image img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 10px 10px 0px 0px;
    }

    .card-content {
      flex: 60%;
      padding: 40px;
      text-align: left;
    }

    .card-title {
      font-size: 24px;
      font-weight: bold;
      color: #333;
      margin-bottom: 20px;
    }

    .card-text {
      font-size: 16px;
      color: #666;
      line-height: 1.6;
    }

    .card-text small {
      color: #999;
    }

    @media (min-width: 600px) {
      .card-image {
        margin-top: 0;
      }
      /* .card-image img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 10px 10px 0px 0px;
    } */
    }
  </style>

  <div class="card">
    <div class="card-image" style="">
      <img src="{{ asset('assets/about-us.jpg') }}" alt="About Us Image">
    </div>
    <div class="card-content">
      <h5 class="card-title">Aneka Benang - Membawa Kreativitas Anda Menjadi Nyata!</h5>
      <p class="card-text">
        Selamat datang di Aneka Benang, destinasi terbaik untuk kebutuhan benang Anda. Dengan koleksi benang berkualitas tinggi, kami memastikan setiap proyek kreatif Anda menjadi sukses. Temukan beragam pilihan benang yang indah dan tahan lama, dan biarkan imajinasi Anda berputar dengan bebas. Bergabunglah dengan kami dan jadilah bagian dari komunitas kreatif yang tak terbatas.
      </p>
      <p class="card-text"><small>Aneka Benang - Wujudkan karya luar biasa Anda!</small></p>
    </div>
  </div>
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
  @include('partials.navbar')
    <div class="card">
      <div class="card-image" style="">
        <img src="{{ asset('assets/about-us.jpg') }}" alt="About Us Image">
      </div>
      <div class="card-content">
        <h5 class="card-title">Aneka Benang - Membawa Kreativitas Anda Menjadi Nyata!</h5>
        <p class="card-text">
          Selamat datang di Aneka Benang, destinasi terbaik untuk kebutuhan benang Anda. Dengan koleksi benang berkualitas tinggi, kami memastikan setiap proyek kreatif Anda menjadi sukses. Temukan beragam pilihan benang yang indah dan tahan lama, dan biarkan imajinasi Anda berputar dengan bebas. Bergabunglah dengan kami dan jadilah bagian dari komunitas kreatif yang tak terbatas.
        </p>
        <p class="card-text"><small>Aneka Benang - Wujudkan karya luar biasa Anda!</small></p>
      </div>
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
          background-color: #f9f9f9;
          font-family:Roboto;
        }

        .about-us {
          max-width: 800px;
          margin: 0 auto;
          padding: 40px;
          text-align: center;
        }

        .card {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
          display: flex;
          align-items: center;
          overflow: hidden;
        }

        .card-image {
          flex: 40%;
        }

        .card-image img {
          width: 100%;
          height: auto;
          object-fit: cover;
          border-radius: 10px 10px 0px 0px;
        }

        .card-content {
          flex: 60%;
          padding: 40px;
          text-align: left;
        }

        .card-title {
          font-size: 24px;
          font-weight: bold;
          color: #333;
          margin-bottom: 20px;
        }

        .card-text {
          font-size: 16px;
          color: #666;
          line-height: 1.6;
        }

        .card-text small {
          color: #999;
        }

        @media (min-width: 600px) {
          .card-image {
            margin-top: 0;
          }
          /* .card-image img {
          width: 100%;
          height: auto;
          object-fit: cover;
          border-radius: 10px 10px 0px 0px;
        } */
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
