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
                            <h3 class="faqs-title">1. Giấy tờ, thủ tục thuê xe</h3>
                            <div class="qa-box">
                                <div class="qa-list">
                                    <div class="ques ">
                                        <p class="ques-content"><i></i><span>Cho
                                                khách thuê xe tự lái thì có cần kí hợp đồng hay giấy tờ pháp lí
                                                nào không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Nhằm gia tăng mức độ an toán đối với các giao dịch cho thuê xe, TravelMobile
                                        khuyến nghị các chủ xe cần ràng buộc chặt chẽ về mặt pháp lí với
                                        khách thuê xe bằng việc giao kết bằng văn bản <strong>"Hợp đồng cho
                                            thuê xe tự lái"</strong> và kí kết <strong>"Biên bản bàn
                                            giao"</strong> trước và sau khi giao xe.&nbsp;</p>

                                    <p>Chủ xe có thể sử dụng mẫu Hợp đồng của đơn vị mình hoặc có thể tham
                                        khảo sử dụng mẫu Hợp đồng và Biên bản bàn giao của TravelMobile.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>TravelMobile
                                                có mẫu hợp đồng thuê xe ô tô hay không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Chủ xe có thể tham khao mẫu Hợp đồng cho thuê xe tự lái và Biên bản
                                        bàn giao xe của TravelMobile (đã nhận được sự tham vấn của Luật sư về tính
                                        pháp lí của hợp đồng).</p>

                                    <p>Mẫu Hợp đồng và Biên bản bàn giao sẽ được bộ phận Phát triển đối tác
                                        của TravelMobile gửi qua mail sau khi xe đăng kí cho thuê của chủ xe được
                                        phê duyệt bởi Ban quản lí ứng dụng TravelMobile.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
