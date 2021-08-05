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
                            <h3 class="faqs-title">4. Bảo hiểm 2 chiều khi thuê xe trên TravelMobile </h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Thuê
                                                xe trên TravelMobile có bảo hiểm 2 chiều hay không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Hầu hết các chủ xe đều mua bảo hiểm 2 chiều nhưng có chủ xe dùng bảo
                                        hiểm 2 chiều hỗ trợ khách, có chủ xe không hỗ trợ.</p>

                                    <p>TravelMobile có liên kết hợp tác với đối tác Bảo hiểm Quân đội MIC để triển
                                        khai gói bảo hiểm theo từng chuyến đi. Bảo hiểm sẽ hỗ trợ cho khách
                                        trong trường hợp bị va quẹt thân vỏ với mức khấu trừ là 2 triệu
                                        vnđ/vụ (số tiền đền bù tối đa là 2 triệu vnđ).</p>

                                    <p>Khách thuê có thể xem chi tiết điều khoản của bảo hiểm trong phần
                                        thông tin về bảo hiểm khi đặt xe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
