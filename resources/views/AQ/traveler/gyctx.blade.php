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
                            <h3 class="faqs-title">8. Gửi yêu cầu thuê xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Tôi có
                                                thể gửi nhiều yêu cầu thuê xe đến các chủ xe khác nhau được
                                                không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Hệ thống TravelMobile cho phép khách thuê có thể gửi yêu cầu thuê xe đến 3
                                        chủ xe cùng một lúc, và trong trường hợp bạn đặt cọc được chiếc xe
                                        bạn ưng ý, hệ thống TravelMobile sẽ tự động hủy 2 chiếc xe còn lại.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Gửi
                                                yêu cầu thuê bao lâu thì xác nhận đặt xe thành công ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Thời gian xác nhận đặt xe thành công phụ thuộc vào phản hồi của chủ
                                        xe và thanh toán đặt cọc của khách thuê.</p>

                                    <p>Thông thường chủ xe sẽ kiểm tra và phản hồi sớm, nếu qua 20 phút kể
                                        từ lúc khách gửi yêu cầu mà chủ xe chưa phản hồi thì TravelMobile sẽ liên
                                        hệ nhắc chủ xe phản hồi.</p>

                                    <p>Đối với các xe đang ở chế độ Đặt xe nhanh thì hệ thống sẽ đồng ý ngay
                                        khi khách gửi yêu cầu thuê.</p>

                                    <p>Sau khi chủ xe phản hồi đồng ý, khách thuê sẽ thanh toán tiền cọc và
                                        nhận thông tin liên lạc của chủ xe. Đây chính là bước cuối cùng để
                                        xác nhận đặt xe thành công.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Đặt xe
                                                xong muốn đổi lại ngày thì làm thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Nếu sau khi bạn đặt cọc xong và muốn đổi lại ngày đi, thì bạn có thể
                                        xử lý theo các trường hợp sau</p>

                                    <ul>
                                        <li>Trường hợp phát sinh sự thay đổi trong vòng 1 tiếng sau khi đặt
                                            cọc: Bạn có thể hủy chuyến trực tiếp và TravelMobile sẽ chuyển phần cọc
                                            qua chuyến mới của bạn, hoặc hoàn cọc lại cho bạn.</li>
                                        <li>Trường hợp phát sinh sự thay đổi sau 1 tiếng, bạn nên gọi điện
                                            báo với chủ xe. Nếu chủ xe có lịch xe trống vào thời gian bạn
                                            muốn đặt lại và đồng ý đổi ngày thuê, TravelMobile sẽ hỗ trợ bạn đặt
                                            lại chuyến mới.</li>
                                        <li>Nếu chủ xe không hỗ trợ thay đổi ngày đi, TravelMobile sẽ áp dụng chính
                                            sách hủy chuyến đối với khách thuê.</li>
                                    </ul>
                                </div>
                                <div>
                                    <div>
                                        <p><i class="ic ic-plus-no-circle"></i><span>Quên
                                                nhập mã khuyến mãi thì xử lí như thế nào ? Có được nhập mã
                                                khuyến mãi nhiều lần hay không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Trường hợp bạn đã đặt cọc nhưng quên nhập mã khuyến mãi, TravelMobile có thể
                                        hỗ trợ hủy chuyến và cập nhật lại mã khuyến mãi&nbsp;cho bạn. Và mã
                                        khuyến mãi&nbsp;được áp dụng 1 lần đối với chuyến đi đã thành công.
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
