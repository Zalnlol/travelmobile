@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Tutorial')

@section('bodycode')
    <section class="body">
        <div class="payment-guide__sect">
            <div class="m-container">
                <h3 class="n-title">Hướng Dẫn Thanh Toán </h3>
                <div class="payment-guide-content">
                    <p>Để hoàn tất quá trình đặt xe, bạn cần thanh toán đặt cọc 30% giá trị chuyến đi theo một
                        trong các hình thức sau:</p>
                    <ul class="list-method">
                        <li><a href="tutorial4#cardMethod">Thanh toán qua thẻ của
                                tôi</a></li>
                        <li><a href="tutorial4#eWalletMethod">Thanh toán trực tiếp - Ví
                                điện tử</a></li>
                        <li><a href="tutorial4#visaMethod">Thanh toán qua thẻ tín
                                dụng/thẻ ghi nợ VISA, Master</a></li>
                        <li><a href="tutorial4#atmMethod">Thanh toán qua thẻ ATM đã đăng
                                kí thanh toán trực tuyến</a></li>
                        <li><a href="tutorial4#storeMethod">Thanh toán tiền mặt tại cửa
                                hàng tiện lợi gần nhà (có chấp nhận thanh toán qua Payoo)</a></li>
                        <li><a href="tutorial4#transferMethod">Thanh toán bằng hình thức
                                chuyển khoản ngân hàng</a></li>
                    </ul>
                    <p class="note">Hiện tại, trường hợp nhiều khách đặt xe cùng một thời điểm, hệ thống sẽ ưu
                        tiên khách hàng thanh toán sớm, vì vậy nên bạn vui lòng đặt cọc trong thời gian sớm nhất
                        bạn nhé.</p>
                </div>
                <div class="payment-guide-detail">

                    <div class="content-guide">
                        <div class="method-item" id="cardMethod">
                            <h4 class="method-name">Thanh toán qua thẻ của tôi</h4>
                            <p>Bạn cần có thẻ Visa credit, Master credit để thanh toán bằng hình thức này. Các
                                bước thực hiện khá đơn giản:</p>
                            <p>Chọn thẻ credit bạn đã thêm tại Thẻ của tôi hoặc Thêm thẻ để thanh toán</p>

                        </div>
                        <div class="method-item" id="eWalletMethod">
                            <h4 class="method-name">Thanh toán trực tiếp - Ví điện tử</h4>
                            <p>Bạn cần có tài khoản 1 trong 2 ví điện tử phía dưới để thanh toán bằng hình thức
                                này. Các bước thực hiện khá đơn giản:</p>
                            <p>Chọn 1 trong 2 ví điện tử ViettelPay hoặc Momo - Bấm thanh toán để chuyển đến ví
                                điện tử - Nhập các thông tin tài khoản hoặc quét mã thanh toán.</p>

                        </div>
                        <div class="method-item" id="visaMethod">
                            <h4 class="method-name">Thanh toán qua thẻ tín dụng/thẻ ghi nợ VISA, Master</h4>
                            <p>Bạn cần có thẻ Visa, Master để thanh toán bằng hình thức này. Các bước thực hiện
                                khá đơn giản:</p>
                            <p>Chọn 1 trong 2 cổng thanh toán Payoo hoặc VTC Pay - Bấm thanh toán để chuyển đến
                                cổng thanh toán - Nhập các thông tin trên thẻ và hoàn tất quá trình thanh toán.
                            </p>

                        </div>
                        <div class="method-item" id="atmMethod">
                            <h4 class="method-name">Thanh toán qua thẻ ATM đã đăng kí thanh toán trực tuyến</h4>
                            <p>Thẻ của bạn phải đăng ký dịch vụ thanh toán trực tuyến với ngân hàng để thực hiện
                                thanh toán bằng hình thức này.</p>
                            <p>Chọn 1 trong 2 cổng thanh toán Payoo hoặc VTC Pay - Bấm thanh toán để chuyển đến
                                cổng thanh toán - Nhập các thông tin trên thẻ và hoàn tất quá trình thanh toán.
                            </p>

                        </div>
                        <div class="method-item" id="storeMethod">
                            <h4 class="method-name">Thanh toán tiền mặt tại cửa hàng tiện lợi gần nhà (có chấp
                                nhận thanh toán qua Payoo)</h4>
                            <p>Trước tiên, bạn cần lấy mã code thanh toán payoo bằng cách bấm "Đặt chỗ". Sau đó,
                                bạn chỉ cần chụp lại mã code và đem đến cửa hàng tiện lợi (có chấp nhận thanh
                                toán payoo - vui lòng xem link đính kèm để xem các địa điểm gần nhất) và tiến
                                hành thanh toán bạn nhé.</p>

                        </div>
                        <div class="method-item" id="transferMethod">
                            <h4 class="method-name">Thanh toán bằng hình thức chuyển khoản ngân hàng</h4>
                            <p>Trước tiên, bạn cần bấm "Đặt chỗ" để xác nhận hình thức thanh toán chuyển khoản.
                                Sau đó, tiến hành chuyển khoản qua tài khoản ngân hàng của TravelMobile trong thời gian
                                sớm nhất bạn nhé.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
