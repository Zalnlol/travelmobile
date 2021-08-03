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
                            <h3 class="faqs-title">1. Xếp hạng xe trên ứng dụng</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Cách
                                                xếp hạng xe trên TravelMobile tính như thế nào ? Ảnh hưởng ra sao
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Việc xếp hạng xe trên ứng dụng TravelMobile dựa trên nhiều tiêu chí như Tỉ
                                        lệ phản hồi, Thời gian phản hồi, Tỉ lệ đồng ý cho thuê và đánh giá
                                        của khách thuê. Để liên tục nâng cao kết quả xếp hạng xe qua đó gia
                                        tăng xác xuất nhận được đơn hàng, các chủ xe có thể lưu ý một số
                                        kinh nghiệm sau:</p>

                                    <p>+ Phản hồi trong thời gian sớm nhất các yêu cầu thuê xe của khách
                                        hàng.</p>

                                    <p>+ Thường xuyên chỉnh lịch bận để nâng cao tỉ lệ đồng ý cho thuê.</p>

                                    <p>+ Liên tục nâng cao chất lượng dịch vụ để nhận được các đánh giá cao
                                        từ khách thuê.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tại
                                                sao tôi cần thường xuyên chỉnh lịch bận và phản hồi yêu cầu thuê
                                                xe của khách hàng ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Hệ thống sẽ ưu tiên xếp hạng cao các chủ xe có thời gian phản hồi
                                        nhanh cũng như có tỉ lệ đồng ý cho thuê cao. Vì thế, các chủ xe cần
                                        thường xuyên cập nhật lịch bận cũng như phản hồi đến khách thuê
                                        nhanh nhất.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
