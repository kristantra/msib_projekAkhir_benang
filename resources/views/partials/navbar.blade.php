<nav class="navbar navbar-expand-md navbar-white" style="background-color: rgba(219, 234, 247, 0.938);">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
      <a class="navbar-brand" href="#">Aneka Benang</a>
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
          <a class="nav-link <?php echo Request::is('about-us') ? 'active' : ''; ?>" href="{{ url('/about-us') }}">Tentang Kami</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav ml-auto" style="margin-right: 5px;">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="{{ asset('assets/keranjang2.png') }}" alt="" style="width: 25px; height: 25px;">
        </a>
      </li>
      @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="padding: 0.1rem 0.1rem;">
            <li><a class="dropdown-item"  href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </li>
        @endauth
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">
          <img src="{{ asset('assets/profile2.png') }}" alt="" style="width: 25px; height: 25px;">
        </a>
      </li>
      @endguest
      {{-- <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="{{ asset('assets/profile2.png') }}" alt="" style="width: 25px; height: 25px;">
        </a>
      </li> --}}
    </ul>
  </div>
</nav>
<style>
  .nav-link:active {
    font-weight: bold;
  }
  .nav-link.active::after {
    content: '';
    display: block;
    width: 100%;
    height: 2px;
    background-color: red; /* Ganti dengan warna yang diinginkan */
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
</style>
