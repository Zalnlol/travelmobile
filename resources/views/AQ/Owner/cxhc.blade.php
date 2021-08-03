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
                            <h3 class="faqs-title">1. Chủ xe hủy chuyến</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi
                                                muốn thay đổi kế hoạch cho thuê / hủy chuyến đi thì cần làm
                                                gì?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Để thực hiện hủy chuyến trên hệ thống, bạn vui lòng truy cập ứng dụng
                                        TravelMobile, chọn mục <strong>Chuyến&nbsp;</strong> -&gt; chọn Chuyến đi
                                        sắp tới&nbsp;muốn hủy -&gt; Bấm <strong>Hủy chuyến</strong>&nbsp;và
                                        lựa chọn lí do hủy chuyến.&nbsp;</p>

                                    <p>Tất cả các trường hợp chủ xe hủy chuyến sẽ dựa theo thời điểm hủy
                                        chuyến để áp dụng việc tính phí. Các chủ xe có thể xem
                                        thêm&nbsp;<strong><a href="PolicieRegulation#canceltrip">
                                                Chính sách hủy chuyến</a></strong></p>

                                    <p>TravelMobile sẽ trừ tiền phí hủy chuyến của chủ xe (nếu có) vào số dư ví của
                                        chủ xe trên ứng dụng TravelMobile và hoàn lại 100% tiền phí này cho khách
                                        hàng để hỗ trợ khách hàng trong việc thuê xe khác.</p>

                                    <p>Một số lưu ý đến các chủ xe:</p>

                                    <p>- Liên hệ với khách thuê trong vòng 1 tiếng sau khi đặt cọc để xác
                                        nhận lại lịch trình, địa điểm giao nhận và các giấy tờ yêu cầu. Nếu
                                        không thống nhất được với khách thuê về các thủ tục yêu cầu, cần
                                        tiến hành hủy chuyến trên hệ thống trong vòng 1 tiếng.</p>

                                    <p>- Hạn chế việc hủy chuyến sát thời điểm bắt đầu chuyến đi. Gọi điện
                                        trước để thông báo với khách thuê trước khi hủy chuyến trên hệ thống
                                        để khách thuê có thể chủ động sắp xếp và thay đổi lịch trình phù
                                        hợp.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
