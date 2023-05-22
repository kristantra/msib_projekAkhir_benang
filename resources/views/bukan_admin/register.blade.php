{{-- @extends('bukan_admin.auth')

@section('title', 'register')

@section('content')
    <style>
        body {
            background-image: white;
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
    </style>

    <body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route("do.register") }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp" autocomplete="off">
                        @error('name')
                            <div id="nameHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" aria-describedby="phoneHelp" autocomplete="off" pattern="^\d{10,12}$" required>
                        @error('phone_number')
                            <div id="phoneHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>                
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                        @error('email')
                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                        @error('password')
                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
            
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                        @error('password_confirmation')
                            <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                        @enderror
                    </div>
                    <p>
                        Sudah punya akun?
                        <a href="{{ route('login') }}">silakan login.</a>
                    </p>
                    <button type="submit" class="btn btn-primary">Register</button>
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
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route("do.register") }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp" autocomplete="off">
                            @error('name')
                                <div id="nameHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" aria-describedby="phoneHelp" autocomplete="off" pattern="^\d{10,12}$" required>
                            @error('phone_number')
                                <div id="phoneHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>                
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation')
                                <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                            @enderror
                        </div>
                        <p>
                            Sudah punya akun?
                            <a href="{{ route('login') }}">silakan login.</a>
                        </p>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<style>
    body {
            background-image: white;
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
</style>