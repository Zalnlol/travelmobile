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
                            <h3 class="faqs-title">3. Phí thuê xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Chi
                                                phí thuê xe bao gồm những gì ? Được tính thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Chi phí thuê xe sẽ bao gồm tổng đơn giá thuê theo ngày, phí dịch vụ
                                        và phí bảo hiểm (nếu xe có bảo hiểm).</p>

                                    <p>Ví dụ:&nbsp;</p>

                                    <p>Đơn giá thuê xe&nbsp; &nbsp; &nbsp; &nbsp; 500000</p>

                                    <p>Phí dịch vụ&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;25000</p>

                                    <p>Phí bảo hiểm&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 25000
                                    </p>

                                    <p>Tổng phí thuê xe&nbsp; &nbsp; &nbsp; &nbsp;550000 x 1 ngày</p>

                                    <p>Tổng cộng&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;550000</p>

                                    <p>Nếu khách thuê có áp dụng mã khuyến mãi, chi phí thuê xe sẽ là tổng
                                        cộng tiền thuê xe trừ khuyến mãi.</p>

                                    <p>Đây chỉ là chi phí thuê xe mà khách phải trả khi thuê, trong trường
                                        hợp phát sinh thêm các chi phí khác như xăng xe, vệ sinh xe, vượt
                                        giới hạn km, khách thuê sẽ trả thêm cho chủ xe về phần chi phí này.
                                    </p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Sử
                                                dụng mã khuyến mãi như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>TravelMobile thường xuyên áp dụng các chương trình khuyến mãi dành cho khách
                                        hàng đặt xe trên ứng dụng.</p>

                                    <p>Với các xe đã được áp dụng chương trình giảm giá đặc biệt ( ví dụ
                                        giảm 10% không giới hạn), bạn chỉ cần chọn thời gian thuê xe và đặt
                                        xe, không cần áp dụng mã khuyến mãi khác.</p>

                                    <p>Với các xe còn lại, tại mục đặt xe sẽ có mục " Mã khuyến mãi", bạn
                                        nhập mã để áp dụng chương trình khuyến mại.</p>

                                    <p>Lưu ý: Đối với mã khuyến mãi, khách thuê được sử dụng 1 lần áp dụng
                                        khi có chuyến đi thành công.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
