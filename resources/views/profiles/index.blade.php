@extends('layoutUser.layout')
@section('titleweb', 'Profile')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userprofile.css') }}">
@section('bodycode')

    <div class="cover-profile new-profile" style="background-image: url('images/homepage-driving.jpg');"></div>
    <div class="profile__sect">
        <div class="content-profile--new">
            <div class="desc-profile desc-account">
                <div class="avatar-box">
                    <div class="avatar avatar--xl has-edit">
                        <img src="{{ $user->avatar_image }}">
                    </div>
                </div>
                <div class="snippet">
                    <div class="profile-info">
                        <div class="item-content">
                            <div class="item-title">
                                <p>{{ $user->name }}</p><a class="func-edit" title="Chỉnh sửa"><i
                                        class="ic ic-edit"></i></a>
                            </div>
                        @if ($user_id == $user->user_id)
                            <a href="/profile/{{ $user->user_id }}/edit">Edit Profile</a>
                        @endif

                            {{-- @can('update', $user->profile)
                                {{-- <a href="/profile/{{ $user->user_id }}/edit">Edit Profile</a> --}}
                            {{-- @endcan --}} 
                            <div class="d-flex"><span class="join">Tham gia: {{ $user->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="line-info">
                        <div class="d-flex">
                            <div class="info"><span class="label">Ngày sinh </span><span
                                    class="ctn">{{ $user->dob }}</span></div>
                            <div class="info"><span class="label">Giới tính </span><span
                                    class="ctn">{{ $user->gender ? "Nam" : "Nữ" }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desc-profile">
                <div class="information information--acc">
                    <div class="inside">
                        <ul>
                            <li><span class="label">Điện thoại</span><span>{{ $user->mobile }}</span></li>
                            <li><span class="label">GPLX</span><span>{{ $user->driver_id ? "Đã đăng ký": "N/A"}}</span></li>
                            <li><span class="label">Email</span><span class="ctn">{{ $user->email }}</span></li>
                            <li><span class="label">Facebook</span><span class="ctn"><span>{{ $user->facebook_id ? "Đã đăng ký" : "N/A" }}
                            <li><span class="label">Google</span><span class="ctn"><span>{{ $user->google_id ? "Đã đăng ký" : "N/A" }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile__wrap">
            <div class="review__sect">
                <div class="review-container"></div>
            </div>
        </div>
    </div>
    <script src="{{ asset('script/map.js') }}"></script>




@endsection
