@extends('layoutUser.layout')
@section('titleweb', 'question - answer')

@section('bodycode')

    <section class="body">
        <div class="body-container faqs-detail">
            <div class="faqs-detail__sect"><a class="back-to-faqs">
                    <div class="icon hidden">
                        <div class="back-icon"></div>
                        <div class="bar"></div>
                    </div>
                </a>
                <div class="faqs-detail__wrap">
                    <div class="sidebar full-size">
                        <div class="sidebar_content">
                            <ul>
                                <br>
                                <br>
                                <br>
                                <br>
                                <li><a href="/travelmobile/public/AQ#owner">Dành cho chủ xe</a></li>
                                <li><a href="/travelmobile/public/AQ#traveler">Dành cho khách thuê</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content">
                        <div class="faqs">
                            <h3 class="faqs-title">1. Quản lí lịch bận</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Chỉnh
                                                lịch bận xe như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Chủ xe có thể chỉnh lịch bận xe tại phần <strong>"Cá nhân"</strong>
                                        -&gt; &nbsp;<strong>"Xe của tôi"</strong> -&gt; <strong>"Danh sách
                                            xe" </strong>-&gt; <strong>"Lịch xe"</strong>, chọn các ngày xe
                                        bận và giữ 1-2 giây để chuyển sang chế độ xe bận.</p>

                                    <p>Bạn có thể xem thêm hướng dẫn chi tiết&nbsp;<a href="tutorial3#manageCar"
                                            target="_blank">tại đây</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
