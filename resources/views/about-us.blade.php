@extends('app')

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

{{-- <div class="about-us"> --}}
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
{{-- </div> --}}
@endsection

