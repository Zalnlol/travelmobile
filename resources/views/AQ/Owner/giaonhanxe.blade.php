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
                            <h3 class="faqs-title">4. Giao nhận xe</h3>
                            <div class="qa-box">
                                <div class="qa-list">
                                    <div class="ques ">
                                        <p class="ques-content"><i></i><span>Tính
                                                năng Giao nhận xe tận nơi là gì và hoạt động như thế nào
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p><strong>Giao nhận xe tận nơi</strong>&nbsp;là tính năng nổi bật thứ 2
                                        của ứng dụng TravelMobile. Nếu bạn có thể sắp xếp thời gian để giao và nhận
                                        xe đến khách thuê trong khu vực của mình,&nbsp;bạn có thể thiết lập
                                        tính năng <strong>"Giao nhận xe tận nơi"</strong> để kiếm thêm thu
                                        nhập cũng như tăng mức độ cạnh tranh cho dịch vụ của mình so với các
                                        chủ xe khác trên ứng dụng.</p>

                                    <p>Để thiết lập tính năng này, bạn truy cập ứng dụng TravelMobile, chọn
                                        <strong>"Cá nhân"</strong> -&gt; <strong>"Xe của tôi"</strong> -&gt;
                                        <strong>"Danh sách xe"</strong> -&gt; <strong>"Thông tin
                                            xe"</strong>, chọn <strong>"Giao xe tận nơi"</strong> và thiết
                                        lập các trường thông tin:
                                    </p>

                                    <ul>
                                        <li>Trong vòng:&nbsp;Phạm vi bạn có thể giao xe tính từ địa điểm xe
                                            của bạn (1 -&gt; 20km)</li>
                                        <li>Phí:&nbsp;Tiền phí giao và nhận xe (từ 0 -&gt; 20,000 VND/km)
                                        </li>
                                    </ul>

                                    <p>Các chủ xe có chính sách miễn phí giao nhận xe sẽ có
                                        nhãn&nbsp;<strong>"Miễn phí giao xe"</strong> bên dưới hình ảnh xe
                                        cũng như ưu tiên xếp hạng cao hơn khi khách hàng tìm kiếm nên sẽ thu
                                        hút và nhận được nhiều đơn hàng hơn, vì vậy các chủ xe có thể cân
                                        nhắc tính năng này cho xe của mình.</p>
                                </div>
                                <div class="qa-list">
                                    <div class="ques ">
                                        <p class="ques-content"><i></i><span>Thời
                                                gian giao nhận xe trên TravelMobile như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>TravelMobile không quy định thời gian giao nhận xe cụ thể, các chủ xe toàn
                                        quyền tùy chỉnh về chính sách thời gian giao nhận xe của mình.&nbsp;
                                    </p>

                                    <p>Các chủ xe càng linh hoạt trong thời gian giao nhận xe thì dịch vụ sẽ
                                        càng cạnh tranh và thu hút khách hàng.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

@endsection
