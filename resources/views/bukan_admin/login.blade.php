{{-- @extends('bukan_admin.auth')

@section('title', 'login')
@section('content')

    <style>
        body {
            background-image: rgb(133, 230, 245);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            overflow: hidden;
        }
        .card {
            margin-top: 45%;
        }
        @media (max-width: 576px) {
            .card {
                margin-top: 0;
                margin-bottom: 20px;
            }
        }
    </style>

    <body>
    <div class="col-md-4 mx-auto my-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("do.login") }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                        @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number">
                        @error('phone_number')
                            <div id="phoneHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <p>
                        Belum punya akun?
                        <a href="{{ route('register') }}">silakan mendaftar.</a>
                    </p>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@endsection --}}

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Web - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="col-md-4 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route("do.login") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number">
                            @error('phone_number')
                                <div id="phoneHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <p>
                            Belum punya akun?
                            <a href="{{ route('register') }}">silakan mendaftar.</a>
                        </p>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    body {
        background-image: rgb(133, 230, 245);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }
    .card {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        max-width: 90%;
    }

    /* @media (max-width: 576px) {
        .body{
            margin-left: 10px;
            margin-right: 10px;
        }
        
        .card {
            margin-top: 0;
            margin-bottom: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
    } */
</style>