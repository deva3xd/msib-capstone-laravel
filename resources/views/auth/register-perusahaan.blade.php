@extends('auth.master')

@section('register')
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-4" style="border: 1px solid #7571f9; border-radius: 10px">
                                <div class="text-center mb-4">
                                    <img src="{{ asset('/landing/images/logo-flat.png') }}" width="100px" alt="Logo">
                                </div>
                                <div class="text-center mb-4">
                                    <h4>Daftar Akun Perusahaan</h4>
                                </div>
                                <form class="login-input" method="POST"
                                    action="{{ route('registerPerusahaan') }}">
                                @csrf
                                <div class="form-group border-bottom">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" placeholder="Nama" required />
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group border-bottom">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" placeholder="Email" required />
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group border-bottom">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        name="password" placeholder="Password (min: 8)" required />
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group border-bottom">
                                    <input type="password" class="form-control" name="password_confirmation"
                                        placeholder="Confirm Password" required />
                                </div>

                                <button class="btn login-form__btn submit w-100">Daftar</button>
                                </form>
                                <p class="mt-1 login-form__footer">Sudah punya akun? <a href="{{ route('login') }}"
                                        class="text-primary">Masuk </a> sekarang</p>
                                <a href="{{ route('LandingPage') }}" class="btn btn-sm btn-danger text-white">kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
