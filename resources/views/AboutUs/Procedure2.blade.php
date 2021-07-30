@extends('layoutUser.layout')
@section('titleweb', 'Procedure2')

@section('bodycode')



    <section class="body">
        <div class="body-container">
            <div class="sidebar">
                <ul>
                    <br>
                    <br>
                    <br>
                    <br>
                    <li><a href="AboutUs">Giới thiệu về TravelMobile</a></li>
                    <li><a href="Features">Tính năng nổi bật</a></li>
                    <li><a href="Renterbenef">Lợi ích thuê xe tự lái</a></li>
                    <li><a href="Ownerbenef">Lợi ích chủ xe</a></li>
                    <li><a href="Carregishowto">Cách đăng kí xe cho thuê</a></li>
                    <li><a href="Procedure1">Quy trình thuê xe tự lái</a></li>
                    <li><a class="active" aria-current="page" href="Procedure2">Quy trình
                            cho thuê xe tự lái</a></li>
                </ul>
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                <br>
                <h1 class="title">Quy trình cho thuê xe tự lái</h1>
                <div class="content-container">
                    <h5>Bước 1: Cập nhật thông tin xe và thiết lập điều khoản cho thuê </h5>
                    <p>Chỉ với vài thao tác đơn giản, bạn đã có thể đưa thông tin, mô tả và đăng tải hình ảnh xe
                        của bạn lên TravelMobile. Cập nhật thời gian cho thuê, mức giá mong muốn và các yêu cầu khác
                        của bạn đối với khách thuê. </p>
                    <div class="space l"></div>
                    <h5>Bước 2: Nhận và phản hồi yêu cầu thuê xe</h5>
                    <p>Bạn sẽ nhận được thông báo từ TravelMobile khi có khách gửi yêu cầu thuê xe đến bạn. Kiểm tra
                        thông tin cá nhân khách thuê và xác nhận cho thuê xe sớm nhất có thể. Đợi khách thuê
                        chuyển tiền đặt cọc để xác nhận hoàn thành việc đặt xe.</p>
                    <div class="space l"></div>
                    <h5>Bước 3: Gặp khách thuê và bàn giao xe</h5>
                    <p>Bạn và khách thuê sắp xếp với nhau để quyết định thời gian và địa điểm giao xe. Kiểm tra
                        giấy phép lái xe, các giấy tờ liên quan và tài sản đặt cọc của khách. Kiểm tra xe, kí
                        hợp đồng, biên bản bàn giao và gửi chìa khóa xe của bạn cho vị khách đáng tin cậy.</p>
                    <div class="space l"></div>
                    <h5>Bước 4: An tâm và nhận lợi nhuận</h5>
                    <p>TravelMobile với đội ngũ chăm sóc khách hàng nhiệt tình, luôn bên cạnh hỗ trợ bạn khi xảy ra vấn
                        đề. TravelMobile với tính năng GPS, cho phép chủ xe có thể dễ dàng theo dõi hiện trạng và vị
                        trí xe của mình ngay trên ứng dụng. (Tính năng dự kiến ra mắt trong năm 2018)</p>
                    <div class="space l"></div>
                    <h5>Bước 5: Nhận lại xe của bạn</h5>
                    <p>Gặp lại khách thuê, kiểm tra xe, kí biên bản bàn giao và nhận lại xe của bạn như thỏa
                        thuận ban đầu. Và cũng đừng quên cho điểm rating khách thuê và gợi ý họ cho điểm bạn
                        trên ứng dụng TravelMobile nhé. Điều này sẽ rất có lợi đối với uy tín của bạn trong cộng đồng
                        thuê xe tự lái TravelMobile!</p>
                </div>
            </div>
        </div>
        <div class="np-bottom">
            <div class="np-bottom-container">
                <div class="np-main">
                    <div class="np-prev"><span>Trở Về</span><a href="Procedure1"><em>Quy
                                trình thuê xe</em></a></div>
                </div>
            </div>
        </div>
    </section>


@endsection
