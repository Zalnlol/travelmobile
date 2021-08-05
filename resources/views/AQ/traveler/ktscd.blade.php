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
                            <h3 class="faqs-title">3. Kết thúc sớm chuyến đi</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi
                                                muốn kết thúc sớm chuyến đi thì cần làm gì ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khách thuê có thể liên hệ với chủ xe để chủ xe sắp xếp thời gian nhận
                                        lại xe. Trong trường hợp cần cập nhật lại thông tin chuyến đi thì
                                        khách thuê liên hệ với TravelMobile để được hỗ trợ và cập
                                        nhật lại.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
