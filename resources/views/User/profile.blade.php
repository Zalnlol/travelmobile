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
                        <div class="avatar-img" style="background-image: url();">
                        </div>
                    </div>
                </div>
                <div class="snippet">
                    <div class="profile-info">
                        <div class="item-content">
                            <div class="item-title">
                                <p>{{ $user->name }}</p><a class="func-edit" title="Chỉnh sửa"><i
                                        class="ic ic-edit"></i></a>
                            </div>
                            <div class="d-flex"><span class="join">Tham gia: {{ $user->joined_date }}</span>
                                <div class="bar-line"></div><span class="sum-trips">Chưa có chuyến</span>
                            </div>
                        </div>
                        <div class="item-points"><svg class="icsvg icsvg-mipoint" viewBox="0 0 24 24" fill="none">
                                <circle r="11" transform="matrix(-1 0 0 1 11 11)" fill="#00A550"></circle>
                                <path
                                    d="M10.022 5.51l-.947 2.738c-.128.37-.496.62-.91.62H5.101c-.928 0-1.313 1.115-.563 1.627l2.48 1.692a.87.87 0 01.347 1.005l-.947 2.738c-.286.828.722 1.517 1.472 1.005l2.48-1.692c.335-.229.79-.229 1.125 0l2.479 1.692c.75.512 1.759-.176 1.472-1.005l-.947-2.738a.87.87 0 01.348-1.005l2.479-1.692c.75-.512.365-1.626-.562-1.626h-3.065c-.415 0-.782-.251-.91-.621l-.947-2.738c-.287-.828-1.534-.828-1.82 0z"
                                    fill="#fff"></path>
                            </svg><span>0 điểm</span>
                            <div class="tooltip"><i class="ic ic-question-mark"></i>
                                <div class="tooltip-text">Điểm thưởng dùng để đổi quà trong mục Quà tặng</div>
                            </div>
                        </div>
                    </div>
                    <div class="line-info">
                        <div class="d-flex">
                            <div class="info"><span class="label">Ngày sinh </span><span
                                    class="ctn">{{ $user->dob }}</span></div>
                            <div class="info"><span class="label">Giới tính </span><span
                                    class="ctn">{{ $user->gender }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="desc-profile">
                <div class="information information--acc">
                    <div class="inside">
                        <ul>
                            <li><span class="label">Điện thoại</span><span class="ctn"><span>{{ $user->mobile }}</span></span></li>
                            <li><span class="label">GPLX</span><span class="ctn"><span><i class=""></i></span><a
                                        class="">   </a></a></span></li>
                            <li><span class="label">Email</span><span class="ctn">{{ $user->email }}<span></span></li>
                            <li><span class="label">Facebook</span><span class="ctn"><span>{{ $user->facebook_id }}
                                        <span><a class=""><i class=""></i></a></span>
                                    </span></span></li>
                            <li><span class="label">Google</span><span class="ctn"><a class=""><i
                                            class=""></i></a></span></li>
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
