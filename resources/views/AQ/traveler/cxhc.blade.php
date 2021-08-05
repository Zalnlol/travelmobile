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
                            <h3 class="faqs-title">2. Chủ xe hủy chuyến</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi đã
                                                đặt cọc nhưng chủ xe hủy chuyến của tôi, xử lí thế nào ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">


                                    <p>Nếu trong giờ làm việc thì nhân viên TravelMobile sẽ liên hệ hỗ trợ bạn tìm
                                        xe khác và xác minh lỗi hủy chuyến để xử lí theo chính sách hủy
                                        chuyến. Tham khảo chính sách hủy chuyến <a href="PolicieRegulation#canceltrip"
                                            target="_blank">tại đây</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
