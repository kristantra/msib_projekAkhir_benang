<!DOCTYPE html>
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
        <script src="https://kit.fontawesome.com/7adbf01c7f.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-white" style="background-color: rgba(219, 234, 247, 0.938);">
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <a class="navbar-brand" href=""><img src="{{ asset('assets/logo 2.png') }}" alt="" style="width: 100px; height: 30px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
      
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link <?php echo Request::is('home') ? 'active' : ''; ?>" href="{{ url('/home') }}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo Request::is('product') ? 'active' : ''; ?>" href="{{ url('/product') }}">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo Request::is('product2') ? 'active' : ''; ?>" href="{{ url('/product2') }}">Produk2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo Request::is('about-us') ? 'active' : ''; ?>" href="{{ url('/about-us') }}">Tentang Kami</a>
              </li>
            </ul>
          </div>
      
          <ul class="navbar-nav ml-auto" style="margin-right: 10px; margin-top: 0px;">
      
            <li class="nav-item" style="margin-top: 13px">
              <a class="nav-link" href="#"><i class="fas fa-shopping-cart larger-icon"></i>
              </a>
            </li>
      
            @auth
              <li class="nav-item dropdown" style="margin-top: 13px">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 0.1rem 0.1rem;">
                  <li><a class="dropdown-item"  href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </li>
            @endauth
      
            @guest
            <li class="nav-item" style="margin-top: 13px">
              <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-user larger-icon"></i>
               
              </a>
            </li>
            @endguest
          </ul>
        </div>
      </nav>
        <div class="container">
            @yield('content')
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
    .nav-link:active {
        font-weight: bold;
      }
      
      .nav-link.active::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;s
        background-color: red; /* Ganti dengan warna yang diinginkan */
      }
      
      .larger-icon {
          font-size: 20px; /* Ukuran font ikon */
        }

      /* Tambahan CSS untuk tampilan mobile */
      @media (max-width: 767px) {
        .navbar-toggler {
          order: 1;
          margin-right: auto;
        }
        .navbar-brand {
          order: 2;
          
        }
        .navbar-collapse {
          order: 3;
        }
        .navbar-nav.ml-auto {
          order: 4;
          display: flex;
          align-items: center;
          flex-direction: row;
          margin-right: 10px;
          position: absolute;
          top: 0;
          right: 0;
        }
        .navbar-nav.ml-auto .nav-item {
          margin-left: 10px;
        }
      }

        body{
            font-family:Roboto;
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
</html>