@extends('layoutUser.layoutstaticpage')
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
                            <h3 class="faqs-title">2. Giao nhận xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p class="ques-content"><i></i><span>Các
                                                điểm gì cần lưu ý khi nhận xe với chủ xe để hạn chế tranh chấp
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Để tranh tranh chấp khi nhận xe, khách thuê có thể:</p>

                                    <ul>
                                        <li>Liên hệ trao đổi và thống nhất với chủ xe về giấy tờ, thủ tục,
                                            thời gian và địa chỉ giao nhận xe ngay sau khi đặt cọc.</li>
                                        <li>Mang theo các giấy tờ như đã trao đổi và kí Hợp đồng thuê xe,
                                            Biên bản bàn giao xe đầy đủ, mỗi bên giữ một&nbsp;bản.</li>
                                        <li>Chụp hình, quay phim lại giấy tờ, trạng thái xe khi nhận xe.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
