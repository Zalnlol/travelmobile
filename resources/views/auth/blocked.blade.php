@extends('layouts.app')
@section('title', 'Thông báo')
@section('content')
<body id="body">
    <div id="login-card" class="card">
        <div class="card-body">
            <h2 class="text-center">Thông báo</h2>
            <br>
            <form method="POST" action="{{ route('/') }}">
                @csrf
                <div class="form-group">
                    Tài khoản của bạn hiện đang bị khóa do vi phạm điều khoản hoặc chính sách của Travel Mobile.
                    Xin liên hệ với quản trị hệ thống bằng số điện thoại 0376515819 hoặc email travelmobile@gmail.com để khôi phục lại chức năng tài khoản.
                </div>

                <div id="btn" class="text-center">
                    Quay lại trang chủ
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
