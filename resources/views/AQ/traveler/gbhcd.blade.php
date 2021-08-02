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
                            <h3 class="faqs-title">2. Gói bảo hiểm chuyến đi</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Thuê
                                                xe nhưng sợ xảy ra sự cố ngoài ý muốn, TravelMobile có gói bảo vệ nào
                                                không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Hiện tại TravelMobile đang có gói Bảo hiểm MIC hỗ trợ cho khách thuê trong
                                        trường hợp bị va quẹt thân vỏ với mức khấu trừ tối đa 2 triệu/vụ.
                                    </p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi
                                                thuê xe có bảo hiểm chuyến đi hỗ trợ, khi gặp sự cố thì cần liên
                                                hệ ai hay xử lí như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Trường hợp bạn gặp sự cố khi đang thuê xe mà có Bảo hiểm hỗ trợ,
                                        TravelMobile khuyến nghị bạn:</p>

                                    <p>&nbsp;- Liên hệ và thông báo chủ xe về sự cố đang gặp để chủ xe nắm
                                        tình hình.</p>

                                    <p>- Chụp hình hiện trường sự cố và liên hệ tổng đài Bảo hiểm MIC
                                        1900558891 để khai báo sự cố và nhận hướng dẫn xử lí phù hợp.</p>



                                    <p>Lưu ý: Bảo hiểm MIC chỉ hỗ trợ cho các sự cố trong thời gian bạn đặt
                                        thuê trên ứng dụng TravelMobile. Vì vậy bạn cần khai báo sự cố ngay khi xảy
                                        ra để được ghi nhận và hỗ trợ đền bù.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
