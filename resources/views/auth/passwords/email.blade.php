@extends('layouts.app')
@section('title', 'Đặt lại mật khẩu')
@section('content')
<body id="body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Reset mật khẩu</h2>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <br>
    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="form-group">
                                {{-- <label for="email">{{ __('E-mail') }}</label> --}}
    
                                <div class="form-check">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Nhập email" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <br>
    
                            <div class="form-group" align="center">
                                <div class="col-md-6">
                                    <button type="submit" id="button" class="btn btn-primary deep-purple btn-block">
                                        {{ __('Gửi đường link reset') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
