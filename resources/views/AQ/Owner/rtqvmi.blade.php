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
                            <h3 class="faqs-title">4. Rút tiền qua ví TravelMobile</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi có
                                                thể theo dõi số dư qua ví và thực hiện rút tiền như thế nào
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Chủ xe có thể kiểm tra số dư trong ví điện tử bằng cách mở ứng dụng,
                                        chọn mục <strong>"Cá nhân"</strong> -&gt; <strong>"Xe của
                                            tôi"</strong> -&gt; <strong>"Ví chủ xe"</strong>.</p>

                                    <p>Để rút tiền, trong mục <strong>"Ví của tôi"</strong> chủ xe kéo xuống
                                        cuối màn hình, chọn <strong>"Gửi yêu cầu rút tiền"</strong>, chọn
                                        một trong hai phương thức <strong>"Chuyển khoản ngân hàng"</strong>
                                        hoặc <strong>"Viettel Pay"</strong> sau đó nhập các thông tin liên
                                        quan đến tài khoản nhận tiền mà ứng dụng hỏi. Cuối cùng bấm
                                        <strong>"Gửi yêu cầu"</strong>.
                                    </p>

                                    <p>Lưu ý: Với phương thức rút tiền <strong>"Viettel Pay"</strong>, chủ
                                        xe cần xác thực tài khoản Viettel Pay trước khi gửi yêu cầu rút
                                        tiền.</p>

                                    <p>&nbsp;</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
