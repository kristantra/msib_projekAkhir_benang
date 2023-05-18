@extends('auth')

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
@endsection
