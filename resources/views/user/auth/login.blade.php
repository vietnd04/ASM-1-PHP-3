@extends('user.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center bg-danger text-white ">{{ __('Đăng Nhập') }}</div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Đăng Nhập') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link d-block text-center mt-2" href="{{ route('password.request') }}">
                                        {{ __('Quên mật khẩu?') }}
                                    </a>
                                @endif
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p>Bạn chưa có tài khoản? <a href="{{ route('register') }}" class="text-primary">Đăng ký</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
