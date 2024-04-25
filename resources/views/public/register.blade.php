@extends('layouts.app')

@section('title', 'Registrasi - Web Perpustakaan')

@section('icon', 'img/book_1.png')

@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css"></script>

    <style>
        body {
            background-color: #ffffff;
            font-family: 'Arial', sans-serif;
            .link-underline-opacity-0 {
    opacity: 1;
    transition: opacity 0.3s;
}

        }

        .container {
            margin-top: 4%;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #272643; 
            padding: 20px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            text-align: center;
        }

        .card-header img {
            width: 80px;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #495057;
        }

        .input-group-text {
            background-color: #5e548e; 
            border: none;
            color: #ffffff;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #5e548e; 
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #9f86c0; 
        }

        .card-footer {
            text-align: center;
            padding: 15px;
            background-color: #f1f1f1;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .link-underline {
            text-decoration: none;
        }

        .link-underline-opacity-0 {
            opacity: 0;
            transition: opacity 0.3s;
        }

        .link-underline:hover .link-underline-opacity-0 {
            opacity: 1;
        }
    </style>
@endsection

@section('main')
    <section class="container">
        <div class="card shadow-lg">
            <div class="card-header">
                <img src="{{ asset('img/logo.svg') }}" alt="img-logo" class="img-logo" loading="lazy" />
            </div>
            <div class="card-body container-fluid px-4 pt-4">
                <form class="row g-3 needs-validation" action="{{ route('user.register') }}" method="post">
                    @csrf
                    <div class="form-label col-md-6">
                        <label for="username" class="form-label">Username</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input type="text" name="username" id="username" value="{{ old('username') }}"
                                class="form-control" placeholder="Masukkan username Anda" required />
                        </div>
                        @error('username')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-geo-alt-fill"></i>
                            </span>
                            <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}"
                                class="form-control" placeholder="Masukkan alamat Anda" required />
                        </div>
                        @error('alamat')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label col-md-6">
                        <label for="email" class="form-label">E-mail</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            <input type="email" name="email" id="email" value="{{ old('email') }}"
                                class="form-control" placeholder="Masukkan email Anda" required />
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label col-md-6">
                        <label for="notelp" class="form-label">No. Telp</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-telephone-fill"></i>
                            </span>
                            <input type="tel" name="notelp" id="notelp" value="{{ old('notelp') }}"
                                class="form-control" placeholder="Masukkan nomor telepon Anda" required />
                        </div>
                        @error('notelp')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label col-md-6 my-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input type="password" name="password" id="password" value="{{ old('password') }}"
                                class="form-control" placeholder="Masukkan password Anda" required />
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-label col-md-6 my-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input type="password" name="valid_password" id="valid_password"
                                value="{{ old('valid_password') }}"class="form-control"
                                placeholder="Konfirmasi password Anda" required />
                        </div>
                        @error('valid_password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('login') }}" class="link-underline">
                    <p class="text-center" style="color: #5e548e;"> 
                        <span class="link-underline-opacity-0">
                            Sudah punya akun? Silahkan masuk
                        </span>
                    </p>
                </a>
            </div>            
        </div>
    </section>
@endsection