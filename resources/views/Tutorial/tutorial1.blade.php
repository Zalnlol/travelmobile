@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Hướng dẫn')

@section('bodycode')
    <section class="body">
        <div class="section-tutorial__title">
            <div class="main_title d-flex">
                <br>
                <br>
                <br>
                <br>
                <h3 class="title">HƯỚNG DẪN</h3>
            </div>
            <div class="tutorial_tabs d-flex"><a href="tutorial1#traveler">Khách Thuê
                </a><a href="tutorial1#owner">Chủ Xe </a></div>
            <div class="main_title d-flex">
                <h3 class="title">Khách thuê</h3>
            </div>
        </div>
        <div class="section-tutorial__detail" id="traveler">
            <div class="wrap-tutorial">
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict-large ict-login"></div>
                        </div>
                    </div>
                    <div class="line-dot bg-gradient-green"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Đăng Nhập </div>
                            <div class="desc">
                                <p>Đăng nhập vào Mioto qua Facebook, Google, số điện thoại hoặc email của bạn. Chúng tôi cần
                                    bạn xác thực số điện thoại trước khi đặt xe.</p>
                            </div><span class="number-step">1</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Tìm Xe</div>
                            <div class="desc">
                                <p>Bạn có thể tìm xe ưng ý nhanh chóng ở nơi bạn muốn tìm, thời gian, hãng xe, đặt xe nhanh
                                </p>
                            </div><span class="number-step">2</span>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-search"></div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict ict-car"> </div>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Đặt Xe </div>
                            <div class="desc">
                                <p>Lựa chọn chiếc xe mà bạn ưng ý và gửi Yêu cầu xe đến Chủ xe. Sau đó chủ xe sẽ nhanh chóng
                                    phản hồi đến bạn trong thời gian nhanh nhất.</p>
                                <p>Nếu bạn không muốn mất nhiều thời gian chờ đợi, có thể lựa chọn chiếc xe khác có tính
                                    năng <span class="rent"><i class="ic ic-sm-thunderbolt-wh"></i> Đặt xe nhanh </span>để
                                    đặt xe trực tiếp mà không cần thông qua sự phản hồi từ phía Chủ xe</p>
                            </div><span class="number-step">3</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Đặt Cọc </div>
                            <div class="desc">
                                <p>Sau khi nhận được sự đồng ý từ chủ xe, khách hàng có thể đặt cọc bằng 3 hình thức chuyển
                                    khoản, ví điện tử hoặc tiền mặt.</p>
                            </div><span class="number-step">4</span>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-deposit"></div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict-large ict-pickup"></div>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Nhận xe</div>
                            <div class="desc">
                                <p>Bạn và chủ xe liên hệ gặp nhau để nhận xe. Ở Mioto, có nhiều chủ xe sẵn sàng đem xe đến
                                    tận nơi cho bạn.</p>
                                <p>Kiểm tra tình trạng và giấy tờ xe, xuất trình bản gốc các giấy tờ, kí xác nhận biên bản
                                    giao xe, nhận chìa khóa và bắt đầu hành trình của bạn</p>
                            </div><span class="number-step">5</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Trả xe </div>
                            <div class="desc">
                                <p>Sau khi hết thời gian thuê, bạn hoàn trả xe giống như tình trạng và thỏa thuận ban đầu.
                                    Kí xác nhận biên bản bàn giao, nhận lại giấy tờ để hoàn thành chuyến đi tuyệt vời của
                                    bạn.</p>
                                <p>Đừng quên cho điểm rating và nhận xét của bạn đến chủ xe để nâng cao chất lượng phục vụ
                                    cho những hành trình sắp tới nhé!</p>
                            </div><span class="number-step">6</span>
                        </div>
                    </div>
                    <div class="line-dot bg-gradient-green-reverse"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-return"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-tutorial__title">
            <div class="main_title d-flex">

                <h3 class="title">Chủ xe</h3>
            </div>

        </div>
        <div class="section-tutorial__detail" id="owner">
            <div class="wrap-tutorial">
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict-large ict-login"></div>
                        </div>
                    </div>
                    <div class="line-dot bg-gradient-green"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Đăng Nhập</div>
                            <div class="desc">
                                <p>Đăng nhập vào Mioto qua Facebook, Google, số điện thoại hoặc email của bạn.
                                </p>
                            </div><span class="number-step">1</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Đăng Ký Xe</div>
                            <div class="desc">
                                <p>Bạn chỉ cần đưa thông tin, mô tả, hình ảnh xe của bạn lên hệ thống. Cập nhật
                                    thời gian, mức giá mong muốn và các yêu cầu khác của bạn đối với khách thuê.
                                    Hoặc bạn có thể <a class="text-primary" href="register"
                                        style="font-weight: bold; text-decoration: underline;">đăng ký chủ xe
                                        tại đây</a></p>
                            </div><span class="number-step">2</span>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-register"></div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict-large ict-checked"> </div>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Duyệt Xe</div>
                            <div class="desc">
                                <p>Bạn chỉ cần chờ trong vài phút, hệ thống sẽ kiểm duyệt xe của bạn có đáp ứng
                                    đủ hay không yêu cầu cho thuê. Mioto sẽ chủ động liện hệ với bạn trong
                                    trường hợp có vấn đề phát sinh.</p>
                            </div><span class="number-step">3</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Nhận Và Phản Hồi</div>
                            <div class="desc">
                                <p>Khi có khách gửi yêu cầu thuê xe, bạn sẽ nhận được thông báo từ Mioto. Kiểm
                                    tra thông tin cá nhân của khách và xác nhận cho thuê sớm nhất có thể.</p>
                                <p>Khi có sự đồng ý cho thuê từ bạn, khách thuê sẽ chuyển tiền đặt cọc để hoàn
                                    tất việc đặt xe.</p>
                            </div><span class="number-step">4</span>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-allow"></div>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left">
                        <div class="tutorial-img">
                            <div class="ict-large ict-send-car"></div>
                        </div>
                    </div>
                    <div class="line-dot"></div>
                    <div class="right">
                        <div class="tutorial-content">
                            <div class="title-tt">Bàn Giao Xe</div>
                            <div class="desc">
                                <p>Bạn và khách thuê liên hệ gặp nhau để bàn giao xe. </p>
                                <p>Kiểm tra giấy phép lái xe, các giấy tờ liên quan và tài sản đặt cọc của
                                    khách.</p>
                                <p>Kiểm tra xe, kí xác nhận biên bản bàn giao và gửi chìa khóa xe của bạn cho vị
                                    khách đáng tin cậy.</p>
                            </div><span class="number-step">5</span>
                        </div>
                    </div>
                </div>
                <div class="step">
                    <div class="left order-2">
                        <div class="tutorial-content">
                            <div class="title-tt">Nhận Xe</div>
                            <div class="desc">
                                <p>Sau khi hết thời gian khách thuê, gặp khách thuê, kiểm tra xe, kí biên bản
                                    bàn giao và nhận lại xe của bạn như thỏa thuận ban đầu.</p>
                                <p>Đừng quên cho điểm rating khách thuê và gợi ý họ cho điểm bạn trên ứng dụng
                                    Mioto. Điều này sẽ tăng uy tín của bạn trong cộng đồng thuê xe tự lái Mioto.
                                </p>
                            </div><span class="number-step">6</span>
                        </div>
                    </div>
                    <div class="line-dot bg-gradient-green-reverse"></div>
                    <div class="right order-1">
                        <div class="tutorial-img">
                            <div class="ict-large ict-return"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
