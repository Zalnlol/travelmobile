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
                            <h3 class="faqs-title">2. Khách hủy chuyến</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Chuyến
                                                đi đã đặt cọc, khách hàng hủy chuyến thì xử lí thế nào ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Trường hợp khách thuê hủy chuyến, sẽ dựa theo thời điểm hủy chuyến để
                                        áp dụng việc tính phí. Các chủ xe có thể xem thêm&nbsp;<strong><a
                                                href="PolicieRegulation#canceltrip" target="_blank">Chính sách hủy
                                                chuyến</a></strong></p>

                                    <p>TravelMobile sẽ cộng tiền phí hủy chuyến của khách hàng (nếu có) vào số dư
                                        ví của chủ xe trên ứng dụng TravelMobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
