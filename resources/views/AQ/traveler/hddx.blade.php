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
                            <h3 class="faqs-title">1. Hướng dẫn đặt xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Cách
                                                thuê xe trên TravelMobile như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>TravelMobile là ứng dụng cho thuê xe tự lái, có hỗ trợ trên 2 nền tảng bao
                                        gồm ứng dụng TravelMobile và website TravelMobile.vn.</p>

                                    <p>Bạn hãy đăng kí một tài khoản trên ứng dụng TravelMobile (bằng SĐT,
                                        Facebook, Mail), đăng nhập và xác thực số điện thoại.&nbsp;</p>

                                    <p>Ở trang chủ, bạn hãy chọn khu vực, điều chỉnh thời gian mà bạn muốn
                                        thuê xe, nhấn tìm kiếm và hệ thống sẽ hiện ra danh sách xe.</p>

                                    <p>Sau khi bạn gửi yêu cầu đặt xe và được chủ xe đồng ý cho thuê, bạn sẽ
                                        tiến hành đặt cọc trước 30% số tiền thuê để nhận được thông tin chủ
                                        xe.</p>

                                    <p>Bạn cũng có thể xem thêm chi tiết các bước đặt xe <a href="tutorial2"
                                            target="_blank">Tại
                                            đây</a></p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi đã
                                                gửi yêu cầu đặt xe rồi, tôi cần làm gì tiếp theo ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khi bạn đã gửi yêu cầu đặt xe thành công, chủ xe sẽ tiến hành phản
                                        hồi đồng ý hoặc từ chối yêu cầu thuê xe của bạn.</p>

                                    <p>Trong trường hợp chủ xe đồng ý yêu cầu thuê xe, bạn sẽ tiến hành đặt
                                        cọc 30% giá trị tiền thuê xe để nhận được thông tin chủ xe và liên
                                        hệ trực tiếp với chủ xe.</p>

                                    <p>Trường hợp chủ xe từ chối yêu cầu thuê xe của bạn, bạn có thể tiếp
                                        tục chọn các xe khác để đặt thêm và hệ thống TravelMobile cho phép người
                                        dùng đặt 3 xe cùng một lúc và sẽ tự động hủy các xe khác trong
                                        trường hợp bạn đặt cọc xe mà bạn ưng ý.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Làm
                                                sao kiểm tra hồ sơ chủ xe ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Để kiểm tra thông tin chủ xe, bạn có thể vào mục profile của chủ xe
                                        để xem danh sách xe cũng như những đánh giá của các khách hàng trước
                                        đã sử dụng dịch vụ của chủ xe.</p>

                                    <p>Đánh giá được thể hiện rõ tại mục review và số sao của các khách hàng
                                        đã đánh giá cho chủ xe.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Đặt xe
                                                nhanh là gì ? Thời gian chờ đợi đặt xe lâu thì làm sao ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Đặt xe nhanh là tính năng cho phép khách thuê đặt xe và chuyển sang
                                        trạng thái chờ đặt cọc ngay lập tức mà không cần xác nhận đồng ý cho
                                        thuê từ chủ xe. Khách thuê có thể đặt cọc để nhận thông tin liên lạc
                                        của chủ xe ngay lập tức.</p>



                                    <p>Ngoài ra, khách thuê có thể đặt&nbsp;các xe đang bật tính năng Đặt xe
                                        nhanh để tiết kiệm thời gian chờ chủ xe phản hồi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
