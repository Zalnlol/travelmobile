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
                            <h3 class="faqs-title">3. Tính năng đặt xe nhanh</h3>
                            <div class="qa-box">
                                <div >
                                    <div >
                                        <p><i></i><span>Tính
                                                năng Đặt xe nhanh là gì ? Cách chỉnh thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p><strong>&nbsp;Đặt xe nhanh</strong>&nbsp;là một trong các tính năng
                                        nổi bật trên TravelMobile. Nếu bạn thường xuyên cập nhật lịch bận xe của
                                        mình và luôn đảm bảo chắc chắn về lịch cho thuê xe, bạn có thể chỉnh
                                        <strong>"Đặt xe nhanh"</strong> trong phần <strong>"Thông tin
                                            xe"</strong> để chuyển sang chế độ duyệt xe tự động.&nbsp;</p>

                                    <p>Các xe ở chế độ <strong>"Đặt xe nhanh"</strong> sẽ được ưu tiên nằm ở
                                        các vị trí đầu và đính kèm nhãn&nbsp;<strong>"Đặt xe nhanh"</strong>
                                        khi khách thuê thực hiện tìm kiếm, nên sẽ nhận được nhiều đơn hàng
                                        hơn so với các xe ở chế độ duyệt thủ công.</p>

                                    <p>Tuy nhiên, lưu ý là trường hợp chủ xe hủy chuyến (vì lí do quên cập
                                        nhật lịch bận) sau khi khách hàng đã thực hiện đặt cọc thì sẽ áp
                                        dụng việc tính phí hủy chuyến (30% giá trị đơn hàng), nên các chủ xe
                                        cần lưu ý và đảm bảo cập nhật lịch bận thường xuyên khi đưa xe mình
                                        ở chế độ <strong>"Đặt xe nhanh"</strong>.</p>

                                    <p>Chủ xe có thể thiết lập tính năng đặt xe nhanh tại phần <strong>"Cá
                                            nhân"</strong> -&gt; &nbsp;<strong>"Xe của tôi"</strong> -&gt;
                                        <strong>"Danh sách xe"</strong> -&gt; <strong>"Thông tin
                                            xe"</strong> -&gt; <strong>"Đặt xe nhanh"</strong></p>

                                    <p>Các chủ xe có thể tùy chỉnh chế độ <strong>"Đặt xe nhanh"</strong>
                                        theo các mốc thời gian: 1 tuần tới - 2 tuần tới - 3 tuần tới - 4
                                        tuần tới. Tất cả các yêu cầu thuê &nbsp;xe trong khoảng thời gian
                                        này sẽ được mặc định đồng ý cho thuê nếu xe không đặt lịch bận, chủ
                                        xe không cần duyệt đồng ý thủ công trên ứng dụng.</p>

                                    <p>Trường hợp có khách đang đặt xe trong khoảng thời gian ở chế độ
                                        <strong>"Đặt xe nhanh"</strong> nhưng chủ xe quên cập nhật lịch bận
                                        hoặc thay đổi kế hoạch cho thuê, chủ xe vui&nbsp;lòng truy cập ứng
                                        dụng để cài đặt lịch bận và hủy chuyến trong thời gian sớm nhất,
                                        trước khi khách hàng đặt cọc thành công.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>

@endsection
