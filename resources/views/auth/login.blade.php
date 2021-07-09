@extends('layouts.app')

@section('content')
<body id="body">
    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Đăng nhập</h2>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <div class="form-check">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Nhập email" required autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Nhập mật khẩu" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <!-- Remember password -->
                {{-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Nhớ mật khẩu') }}
                            </label>
                        </div>
                </div> --}}

                <div class="form-group">
                    @if (Route::has('password.request'))
                        <div class="text-right">
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                <b>{{ __('Quên mật khẩu?') }}</b>
                            </a>
                        </div>
                    @endif
                </div>

                <div class="form-group">
                        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block">
                            {{ __('Xác nhận') }}
                        </button>
                </div>

                <div class="text-center">
                    Bạn chưa là thành viên? <a href="register"><b>Hãy đăng kí ngay!</b></a>
                </div>
                <hr>
                <br>

                <div id="btn" class="text-center">
                    Hoặc đăng nhập bằng tài khoản
                    <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
                    <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
