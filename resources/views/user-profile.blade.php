@extends('layoutUser.layout')

<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/userprofile.css') }}">
    <img src="{{asset('/../..images/icon.png')}}">;
</head>

<body>


    <section class="body">
        <div class="cover-profile new-profile"
            style="background-image: url();"></div>
        <div class="profile__sect">
            <div class="content-profile--new">
                <div class="desc-profile desc-account">
                    <div class="avatar-box">
                        <div class="avatar avatar--xl has-edit">
                            <div class="avatar-img"
                                style="background-image: url();">
                            </div>
                        </div>
                    </div>
                    <div class="snippet">
                        <div class="profile-info">
                            <div class="item-content">
                                <div class="item-title">
                                    <p>LH Tâm</p><a class="func-edit" title="Chỉnh sửa"><i class="ic ic-edit"></i></a>
                                </div>
                                <div class="d-flex"><span class="join">Tham gia: 07/07/2021</span>
                                    <div class="bar-line"></div><span class="sum-trips">Chưa có chuyến</span>
                                </div>
                            </div>
                            <div class="item-points"><svg class="icsvg icsvg-mipoint" viewBox="0 0 24 24" fill="none"
                                    >
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
                                <div class="info"><span class="label">Ngày sinh </span><span class="ctn"></span></div>
                                <div class="info"><span class="label">Giới tính </span><span class="ctn">Nam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc-profile">
                    <div class="information information--acc">
                        <div class="inside">
                            <ul>
                                <li><span class="label">Điện thoại</span><span class="ctn"><span></span><a
                                            class="func-edit" title="Edit"><i class="ic ic-edit"></i></a></span></li>
                                <li><span class="label">GPLX</span><span class="ctn"><span><i
                                                class="ic ic-error"></i></span><a
                                            class="verify btn btn--s prevent-click">Chưa xác thực GPLX</a><a
                                            class="func-edit" title="Edit"><i class="ic ic-edit"></i></a></span></li>
                                <li><span class="label">Email</span><span class="ctn"><span><i
                                                class="ic ic-verify"></i>mythaisonmy@gmail.com</span><a
                                            class="func-edit" title="Edit"><i class="ic ic-edit"></i></a></span></li>
                                <li><span class="label">Facebook</span><span class="ctn"><span>LH Tâm 0 <span><a
                                                    class="func-edit"><i class="ic ic-remove"></i></a></span>
                                        </span></span></li>
                                <li><span class="label">Google</span><span class="ctn"><a class="func-edit"><i
                                                class="ic ic-link"></i></a></span></li>
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
    </section>




</body>
<div style="position: absolute; top: 0px;"></div>

</html>
