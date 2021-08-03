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
                            <h3 class="faqs-title">2. Tính năng GPS</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>TravelMobile
                                                có hỗ trợ GPS cho chủ xe hay không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>GPS là thiết bị định vị được TravelMobile phát triển và đã triển khai lô đầu
                                        tiên vào tháng 02/2020.</p>

                                    <p>Với tính năng GPS, chủ xe có thể dễ dàng theo dõi vị trí xe của mình
                                        ngay trên ứng dụng bất cứ lúc nào và bất cứ đâu. Qua đó, TravelMobile mong
                                        muốn nâng cao hơn nữa mức độ an toàn đối với công việc kinh doanh
                                        cho thuê xe của chủ xe.</p>

                                    <p>Những lô GPS tiếp theo, TravelMobile sẽ gửi thông báo đến chủ xe khi triển
                                        khai để hỗ trợ chủ xe tốt hơn.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>GPS
                                                của TravelMobile có những tính năng nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>TravelMobile đang phát triển GPS với các tính năng Xem vị trí xe, lộ trình
                                        xe đã di chuyển, lịch sử hành trình các chuyến đi. Các tính năng cải
                                        tiến như: Xem vận tốc xe, cảnh báo quá tốc độ, cảnh báo mất tín
                                        hiệu, …sẽ được cập nhật sớm.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Quản
                                                lí GPS trên ứng dụng TravelMobile như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Chủ xe truy cập vào&nbsp;ứng dụng, chọn mục <strong>"Cá
                                            nhân"</strong> -&gt; <strong>"Xe của tôi"</strong> -&gt;
                                        <strong>"Định vị GPS"</strong>. Tại đây chủ xe có thể xem vị trí xe,
                                        lịch sử theo lộ trình, thời gian và các tính năng khác.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
