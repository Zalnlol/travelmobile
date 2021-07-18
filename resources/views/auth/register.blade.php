@extends('layouts.app')

@section('content')
<body id="body">
    <div class="card" id="login-card">
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Họ và tên') }}</label>

                    <div class="form-check">
                        <input id="txt-fullname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-mail') }}</label>

                    <div class="form-check">
                        <input id="txt-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Mật khẩu') }}</label>

                    <div class="form-check">
                        <input id="txt-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('Xác nhận mật khẩu') }}</label>

                    <div class="form-check">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block">{{ __('Đăng ký') }}</button>
                    <button formaction="/" id="button" class="btn btn-primary deep-purple btn-block ">Hủy</button>
                </div>
                <br>
                <div class="text-center">
                    <a href="login"><b>Tôi là thành viên</b></a>
                </div>
                <hr>
                <br>
                <div id="btn" class="text-center">
                    <b>Hoặc đăng nhập bằng tài khoản</b>
                    <a href="{{url('auth/facebook')}}">
                        <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
                    </a>
                    <a href="{{url('auth/google')}}">
                        <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    

</body>
@endsection
