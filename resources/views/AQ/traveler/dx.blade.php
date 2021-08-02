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
                            <h3 class="faqs-title">1. Đặt xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Đặt xe
                                                xong phải đợi chủ xe duyệt mất thời gian, có cách nào khác nhanh
                                                hơn ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khách thuê có thể đặt 3 xe cùng lúc hoặc đặt các xe ở trạng thái Đặt
                                        xe nhanh để có thể đặt cọc và liên hệ làm việc với chủ xe ngay.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Kinh
                                                nghiệm đặt xe trên TravelMobile như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khách thuê có thể tham khảo một số kinh nghiệm:</p>

                                    <ul>
                                        <li>Lựa chọn chủ xe phản hồi nhanh, tỉ lệ đồng ý cao, nhận xét tốt
                                            từ các khách đã thuê.</li>
                                        <li>Xe có bảo hiểm, hình ảnh đẹp, thông tin đầy đủ và rõ ràng.</li>
                                        <li>Đặt xe ở trạng thái Đặt xe nhanh và đặt 3 xe cùng lúc.</li>
                                        <li>Tham khảo các mã khuyến mãi hiện hành và chọn mã ưu đãi nhất.
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
