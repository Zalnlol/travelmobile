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
                            <h3 class="faqs-title">1. Hủy chuyến sau khi đặt cọc</h3>
                            <div class="qa-box">

                                <div>
                                    <div>
                                        <p><i></i><span>Tôi
                                                muốn hủy chuyến sau khi đã đặt cọc thì cần làm gì?</span></p>
                                    </div>

                                </div>
                                <div class="answer">
                                    <p>Khách thuê có thể vào mục Chuyến, chọn chuyến muốn hủy, bấm Hủy
                                        chuyến và nhập lí do hủy chuyến để hủy chuyến.&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi có
                                                được hoàn lại tiền nếu thay đổi lịch trình sau khi đã đặt cọc
                                                ?</span></p>
                                    </div>

                                </div>
                                <div class="answer">
                                    <p>Theo chính sách hủy chuyến, nếu khách thuê hủy:&nbsp;</p>

                                    <ul>
                                        <li>Trong vòng 1h sau khi đặt cọc thì được hoàn lại 100% tiền đã đặt
                                            cọc.</li>
                                        <li>Hơn 7 ngày trước chuyến đi thì sẽ được hoàn lại 70% tiền đã đặt
                                            cọc.</li>
                                        <li>Từ 7 ngày trở xuống trước chuyến đi thì sẽ không được hoàn lại
                                            tiền đã đặt cọc.</li>
                                    </ul>

                                    <p>Trong trường hợp khách thuê và chủ xe có thỏa thuận riêng về phần
                                        tiền cọc thì TravelMobile sẽ thực hiện theo thỏa thuận chung của 2 bên, nếu
                                        không có thì sẽ thực hiện theo chính sách hủy chuyến.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
