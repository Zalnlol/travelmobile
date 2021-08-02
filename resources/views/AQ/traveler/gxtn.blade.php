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
                            <h3 class="faqs-title">6. Giao xe tận nơi</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Địa
                                                chỉ TravelMobile ở đâu ? Bãi xe nằm ở đâu ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Văn phòng TravelMobile nằm tại 305/4 Lê Văn Sỹ, P1, Tân Bình, TPHCM.</p>

                                    <p>Do TravelMobile là ứng dụng kết nối chủ xe và khách thuê nên sẽ không có bãi
                                        xe, khách thuê xe trên ứng dụng sẽ lựa chọn xe gần khu vực của khách
                                        để thuận tiện trong việc giao nhận xe.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>TravelMobile
                                                có giao xe tận nơi không ? Làm sao tìm được trên TravelMobile ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Phần giao nhận xe tận nơi sẽ tùy thuộc vào chính sách của từng chủ
                                        xe, chủ xe sẽ hỗ trợ giao nhận trong phạm vi quy định.</p>

                                    <p>Để lựa chọn chủ xe có giao xe tận nơi, bạn chọn trong mục bộ lọc,
                                        hoặc trên danh sách xe, sẽ ghi rõ xe có giao nhận tận nơi hay không.
                                    </p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Tính
                                                phí giao nhận xe thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Phí giao nhận được TravelMobile áp dụng sẽ là phí giao nhận 2 chiều.</p>

                                    <p>Ví dụ: Chủ xe hỗ trợ giao nhận xe trong vòng 10km, phí giao nhận
                                        10k/km. Quãng đường giao xe là 5km thì phí giao xe và nhận xe sẽ là
                                        50k.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Tôi
                                                muốn thay đổi vị trí giao nhận thì làm thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Nếu bạn muốn thay đổi vị trí giao nhận xe khi chưa tiến hành đặt cọc,
                                        bạn có thể hủy chuyến và đặt xe lại để chỉnh lại địa điểm giao nhận
                                        xe.&nbsp;</p>

                                    <p>Trong trường hợp bạn đã tiến hành đặt cọc, bạn có thể liên hệ trao
                                        đổi trực tiếp với chủ xe về vấn đề giao nhận xe.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>TravelMobile
                                                có giao xe tại sân bay không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Một số chủ xe trên ứng dụng có dịch vụ hỗ trợ giao nhận xe tận nơi.
                                        Để đặt được xe giao tại sân bay, bạn nên chọn những xe gần khu vực
                                        sân bay và có hỗ trợ giao nhận tận nơi.</p>

                                    <p>Tại mục giao nhận xe tận nơi, bạn nhập địa chỉ sân bay, hệ thống sẽ
                                        hiện lên chi phí giao nhận xe để khách thuê có thể tiện lợi trong
                                        việc sắp xếp kế hoạch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
