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
                            <h3 class="faqs-title">2. Duyệt yêu cầu thuê xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Làm
                                                sao biết được có khách đang đặt xe ? Duyệt xe như thế nào
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khi có yêu cầu thuê xe từ khách thuê, các chủ xe sẽ nhận được thông
                                        báo qua 2 hình thức: Tin nhắn SMS và Thông báo trên ứng dụng TravelMobile.
                                    </p>

                                    <p>Ngay khi nhận được yêu cầu thuê xe, chủ xe cần thực hiện phản hồi
                                        trong thời gian sớm nhất bằng cách truy cập ứng dụng TravelMobile, chọn mục
                                        Thông báo, xem Chi tiết thuê xe, bấm Đồng ý / Từ chối cho thuê.</p>

                                    <p>Hệ thống sẽ ưu tiên xếp hạng cao đối với các xe có Tỉ lệ phản hồi cao
                                        - Thời gian phản hồi nhanh - Tỉ lệ đồng ý cao, vì thế các chủ xe cố
                                        gắng trả lời nhanh chóng và đầy đủ các yêu cầu thuê xe, cũng như cập
                                        nhật lịch bận xe thường xuyên để nâng cao tỉ lệ đồng ý.&nbsp;</p>

                                    <p>Đây là một trong những kinh nghiệm cho thuê xe quan trọng nhất đối
                                        với các chủ xe để có thể kinh doanh hiệu quả trên ứng dụng TravelMobile.
                                    </p>

                                    <p>Bạn cũng có thể xem thêm chi tiết các bước hướng dẫn phê duyệt tại
                                        phần hướng dẫn dành cho chủ xe&nbsp;<a href="tutorial3#requestTrip"
                                            target="_blank">Tại đây</a></p>

                                    <p>&nbsp;</p>

                                    <p>&nbsp;</p>

                                    <p>&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Kiểm
                                                tra hồ sơ khách hàng thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khi có yêu cầu thuê xe từ khách thuê, bạn có thể truy cập ứng dụng
                                        TravelMobile, chọn mục Thông báo, xem Yêu cầu thuê xe. Tại trang Chi
                                        tiết&nbsp;thuê xe, để xem thông tin khách thuê, bạn bấm vào tên
                                        khách thuê để dẫn đến trang Hồ sơ,&nbsp;tại đây bạn có thể xem các
                                        đánh giá từ các chủ xe khác dành cho khách thuê (trường hợp khách
                                        thuê đã từng có chuyến đi trên TravelMobile).&nbsp;</p>

                                    <p>Bạn cũng có thể xem thêm chi tiết các bước hướng dẫn phê duyệt tại
                                        phần <a href="tutorial3#requestTrip" target="_blank">Hướng dẫn dành cho chủ xe</a>
                                    </p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Trong
                                                bao lâu thì tôi cần phản hồi cho khách hàng ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Các chủ xe cần phản hồi cho khách hàng càng sớm càng tốt để gia tăng
                                        xác suất chốt đơn hàng thành công và gia tăng chỉ số Thời gian phản
                                        hồi (ảnh hưởng trực tiếp đến kết quả xếp hạng xe trên ứng dụng).</p>

                                    <p>TravelMobile khuyến khích các chủ xe cố gắng phản hồi sớm cho khách thuê
                                        trong vòng 15p kể từ khi nhận được yêu cầu thuê xe.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi ít
                                                kiểm tra điện thoại thường xuyên nên duyệt xe chậm, TravelMobile có chế
                                                độ duyệt xe tự động không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Nếu các chủ xe ít kiểm tra điện thoại dẫn đến việc phản hồi chậm đối
                                        với các yêu cầu thuê xe, chủ xe có thể chuyển sang chế độ duyệt xe
                                        tự động với tính năng <strong>"Đặt xe nhanh"</strong> cho phép khách
                                        thuê đặt xe không cần đợi chủ xe phê duyệt.</p>

                                    <p>Bên cạnh đó, các xe ở chế độ duyệt xe tự động sẽ được ưu tiên nằm ở
                                        các vị trí đầu và đính kèm icon <strong>"Đặt xe nhanh"</strong> khi
                                        khách thuê thực hiện tìm kiếm xe tại khu vực đã chọn, nên sẽ nhận
                                        được nhiều đơn hàng hơn so với các xe ở chế độ duyệt thủ công.</p>

                                    <p>Tuy nhiên, lưu ý là trường hợp chủ xe hủy chuyến (vì lí do quên cập
                                        nhật lịch bận) sau khi khách hàng đã thực hiện đặt cọc thì sẽ áp
                                        dụng việc tính phí hủy chuyến (30% giá trị đơn hàng), nên các chủ xe
                                        cần hết sức lưu ý và đảm bảo cập nhật lịch bận thường xuyên khi đưa
                                        xe mình ở chế độ <strong>"Đặt xe nhanh"</strong>.</p>

                                    <p>Các chủ xe có thể tùy chỉnh chế độ <strong>"Đặt xe nhanh"</strong>
                                        theo các mốc thời gian: 1 tuần tới - 2 tuần tới - 3 tuần tới - 4
                                        tuần tới.</p>

                                    <p>&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Xe tôi
                                                bận ko cho thuê thì có cần phản hồi hay phê duyệt không ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Trường hợp xe bận thì chủ xe vẫn cần phản hồi đến khách thuê bằng
                                        cách bấm Từ chối cho thuê (chọn lí do xe bận) tại trang Thông tin
                                        chuyến.&nbsp;</p>

                                    <p>Nếu các chủ xe không phản hồi các yêu cầu thuê xe sẽ làm giảm Tỉ lệ
                                        phản hồi, qua đó trực tiếp ảnh hưởng đến kết quả xếp hạng xe trên
                                        ứng dụng, làm giảm xác xuất nhận được đơn hàng và giảm hiệu quả kinh
                                        doanh.</p>

                                    <p>TravelMobile khyến nghị giải pháp tốt nhất là các chủ xe cần thường xuyên
                                        cập nhật lịch bận trên ứng dụng.</p>

                                    <p>&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Sau
                                                khi tôi duyệt đồng ý cho thuê thì giao dịch đặt xe đã hoàn tất
                                                chưa ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Sau khi chủ xe duyệt đồng ý cho thuê thì khách thuê sẽ tiến hành đặt
                                        cọc qua hệ thống TravelMobile. Vì khách thuê có thể thay đổi kế hoạch thuê
                                        xe sau khi chủ xe đồng ý, nên chỉ khi nào khách thuê đặt cọc thành
                                        công thì giao dich đặt xe mới hoàn tất.</p>

                                    <p>Lúc này, chủ xe và khách thuê sẽ nhận được thông tin số điện thoại
                                        của nhau để liên hệ xác nhận lại lịch trình, địa điểm giao nhận và
                                        các giấy tờ yêu cầu.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Sau
                                                khi khách hàng đặt cọc thành công tôi cần làm gì ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Sau khi khách thuê đặt cọc xe thành công, chủ xe và khách thuê sẽ
                                        nhận được thông tin số điện thoại của nhau.&nbsp;</p>

                                    <p>Các chủ xe cần chủ động liên hệ khách thuê trong vòng 1 giờ kể từ
                                        thời điểm đặt cọc để xác nhận lại lịch trình, địa điểm giao nhận và
                                        các giấy tờ yêu cầu.&nbsp;</p>

                                    <p>Trường hợp có sự thay đổi về kế hoạch cho thuê hoặc không thống nhất
                                        được với khách thuê về các thủ tục yêu cầu, chủ xe cần tiến hành hủy
                                        chuyến trên hệ thống, tất cả các giao dịch hủy chuyến trong vòng 1
                                        giờ sẽ không bị tính phí.&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi đã
                                                đồng ý cho thuê, nhưng khách hàng vẫn chưa đặt cọc, trong thời
                                                gian đó tôi có yêu cầu thuê xe bên ngoài hệ thống TravelMobile thì phải
                                                làm thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Bạn có thể nhận đơn hàng bên ngoài và tiến hành hủy chuyến trên hệ
                                        thống TravelMobile. Chủ xe chỉ cần đảm bảo thời điểm hủy chuyến xảy ra
                                        trước khi khách hàng đặt cọc thành công.&nbsp;</p>

                                    <p>Trường hợp chủ xe hủy chuyến sau khi khách thuê đặt cọc thành công
                                        thì sẽ áp dụng theo <a href="PolicieRegulation#canceltrip" target="_blank">Chính
                                            sách hủy chuyến</a> trong Quy chế hoạt
                                        động.</p>

                                    <p>&nbsp;</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Tôi đã
                                                đồng ý cho thuê, nhưng khách hàng vẫn chưa đặt cọc, trong thời
                                                gian đó tôi nhận được các yêu cầu thuê xe khác trên TravelMobile cùng
                                                khoảng thời gian trên thì tôi có được nhận hay không ?</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Hệ thống TravelMobile cho phép một chủ xe có thể nhận và đồng ý cho thuê
                                        cùng lúc đối với một hoặc nhiều đơn hàng cho cùng một khoảng thời
                                        gian thuê xe trên ứng dụng TravelMobile. Nếu có đơn hàng nào đặt cọc thành
                                        công thì các đơn hàng còn lại sẽ tự động hủy.</p>
                                </div>
                                <div>
                                    <div>
                                        <p><i></i><span>Người
                                                đặt thuê và người kí hợp đồng là 2 người khác nhau có được không
                                                ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Trường hợp đặt thuê giùm người thân trên ứng dụng vẫn có và hợp lệ.
                                        Chủ xe cần lưu ý người kí hợp đồng thuê xe sẽ để lại giấy tờ bản gốc
                                        (Hộ khẩu hoặc KT3 hoặc Passport) và có tên trong giấy tờ đó, đối
                                        chiếu thông tin trên giấy tờ này với CMND/CCCD, người lái xe cần có
                                        GPLX hợp lệ theo quy định của Bộ GTVT.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
