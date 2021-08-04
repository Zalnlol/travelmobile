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
                            <h3 class="faqs-title">3. Thanh toán đặt cọc xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Quy
                                                trình thanh toán tiền trên TravelMobile như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Ngay khi kết thúc chuyến đi, TravelMobile sẽ cộng phần tiền còn lại vào ví
                                        cho chủ xe. Trường hợp chuyến bị hủy mà chủ xe được nhận tiền cọc
                                        thì trong vòng hai ngày làm việc tiếp theo TravelMobile sẽ cộng vào ví điện
                                        tử.&nbsp;</p>

                                    <p>Sau khi gửi yêu cầu rút tiền, TravelMobile sẽ chuyển tiền cho chủ xe trong
                                        vòng 3 ngày làm việc tiếp theo.</p>

                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
