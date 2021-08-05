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
                            <h3 class="faqs-title">3. Đánh giá sau chuyến đi</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Gửi
                                                đánh giá cho chủ xe sau chuyến đi như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Sau khi bấm kết thúc chuyến đi, ứng dụng sẽ hiển thị phần đánh giá.
                                        Khách thuê có thể viết nhận xét đánh giá về chất lượng xe, dịch vụ
                                        của chủ xe.</p>

                                    <p>Trường hợp khách không gửi đánh giá thì 9 ngày sau khi kết thúc
                                        chuyến đi, hệ thống sẽ tự động đánh giá 5* cho chủ xe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
