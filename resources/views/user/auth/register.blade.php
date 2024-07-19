@extends('user.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center bg-danger fw-medium text-white">{{ __('Đăng Ký') }}</div>

                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('register') }}">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">{{ __('Tên') }}</label>
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control" name="email"  required autocomplete="email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="form-label">{{ __('Mật khẩu') }}</label>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password_confirmation" class="form-label">{{ __('Xác nhận mật khẩu') }}</label>
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Đăng Ký') }}
                                </button>
                            </div>
                        </form>

                        <div class="text-center mt-3">
                            <p>Đã có tài khoản? <a href="{{ route('login') }}" class="text-primary">Đăng nhập</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
