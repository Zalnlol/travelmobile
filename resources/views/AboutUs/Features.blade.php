@extends('layoutUser.layout')
@section('titleweb', 'Features')

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
                    <li><a class="active" aria-current="page" href="eatures">Tính năng nổi
                            bật</a></li>
                    <li><a href="Renterbenef">Lợi ích thuê xe tự lái</a></li>
                    <li><a href="Ownerbenef">Lợi ích chủ xe</a></li>
                    <li><a href="Carregishowto">Cách đăng kí xe cho thuê</a></li>
                    <li><a href="Procedure1">Quy trình thuê xe tự lái</a></li>
                    <li><a href="Procedure2">Quy trình cho thuê xe tự lái</a></li>
                </ul>
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                <br>
                <h2 class="title">Tính năng nổi bật</h2>
                <div class="content-container">
                    <h4>Tính năng Calendar</h4>
                    <p>Hỗ trợ chủ xe thuận tiện quản lí, theo dõi lịch trình xe một cách khoa học và hoàn toàn
                        chủ động trong việc thiết lập và điều chỉnh giá thuê xe. Cho phép khách thuê xem trước
                        lịch trình xe và nhận báo giá thuê xe theo từng ngày.</p>
                    <p>Chính vì thế, tính năng Calendar sẽ giúp loại bỏ hoàn toàn công đoạn liên lạc bằng điện
                        thoại giữa chủ xe và khách thuê trong việc trao đổi thời gian và giá thuê xe, qua đó rút
                        ngắn đáng kể thời gian đặt xe.</p>
                    <div class="space l"></div>
                    <h4>Tính năng đánh giá</h4>
                    <p>Cho phép khách thuê xe chấm điểm và gửi nhận xét đến chủ xe cũng như xe được thuê. Nhờ
                        đó, khách thuê xe có thông tin làm cơ sở để có thể lựa chọn các chủ xe uy tín, các xe có
                        chất lượng tốt trước khi quyết định đặt xe.</p>
                    <p>Tính năng Rating của TravelMobile cũng cho phép chủ xe có thể gửi các phản hồi và chấm điểm
                        ngược lại đối với khách thuê xe. Từ đó giúp nâng cao hơn nữa chất lượng thành viên trong
                        cộng đồng thuê xe tự lái TravelMobile.</p>
                    <div class="space l"></div>
                    <h4>Đặt xe nhanh và giao nhận xe tận nơi</h4>
                    <p>Bạn không có nhiều thời gian, bạn muốn thuê xe nhanh chóng không cần qua bước xét duyệt
                        online của chủ xe? Bạn muốn xe đươc đem đến tận nơi trước cửa nhà của bạn hay đón bạn
                        trực tiếp tại phi trường? Tính năng “Đặt xe nhanh” và “Giao xe tận nơi” của TravelMobile sẽ đáp
                        ứng hoàn hảo các yêu cầu này của bạn.</p>
                    <p>Tại TravelMobile, chúng tôi có một danh sách dài các chủ xe sẵn sàng cung cấp dịch vụ giao xe
                        tận nơi và cho phép bạn thuê xe không cần xét duyệt online (chỉ cần kiểm tra trực tiếp
                        khi bàn giao xe).</p>
                    <div class="space l"></div>
                    <h4>GPS mọi nẻo đường</h4>
                    <p>TravelMobile biết rằng xe ô tô là tài sản lớn của bạn và kinh doanh cho thuê xe tự lái sẽ luôn
                        tiềm ẩn rủi ro. Vì thế, bên cạnh viêc hỗ trợ bạn với công đoạn xác minh trước những
                        thông tin cá nhân quan trọng của khách hàng (Giấy phép lái xe, CMND, Sổ hộ khẩu/Giấy tạm
                        trú KT3 và điểm rating), chúng tôi đang phát triển thêm tính năng GPS tích hợp trực tiếp
                        trên ứng dụng.</p>
                    <p>Với tính năng GPS, chủ xe có thể dễ dàng theo dõi hiện trạng và vị trí xe của mình ngay
                        trên ứng dụng, bất cứ lúc nào và bất cứ đâu để bạn có thể hoàn toàn an tâm về chiếc xe
                        của mình. (TravelMobile dự kiến triển khai tính năng GPS trong quý 4 năm 2019, hỗ trợ cài đặt
                        cho chủ xe với giá bán ước tính 1,000,000VND/thiết bị).</p>
                </div>
            </div>
        </div>
        <div class="np-bottom">
            <div class="np-bottom-container">
                <div class="np-main">
                    <div class="np-prev"><span>Trở Về</span><a href="AboutUs"><em>Về chúng
                                tôi</em></a></div>
                    <div class="np-prev np-next"><span>Kế Tiếp</span><a href="Renterbenef"><em>Lợi ích thuê Xe</em></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
