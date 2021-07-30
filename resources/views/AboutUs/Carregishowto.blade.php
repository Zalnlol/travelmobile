@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Carregishowto')

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
                    <li><a class="active" aria-current="page" href="Carregishowto">Cách
                            đăng kí xe cho thuê</a></li>
                    <li><a href="Procedure1">Quy trình thuê xe tự lái</a></li>
                    <li><a href="Procedure2">Quy trình cho thuê xe tự lái</a></li>
                </ul>
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                <br>
                <h2 class="title">Tôi đăng kí xe cho thuê như thế nào?</h2>
                <div class="content-container">
                    <h5>Bước 1: Đăng nhập </h5>
                    <p>Đăng nhập vào tài khoản của mình, nếu bạn chưa có tài khoản thì có thể đăng ký tạo tài
                        khoản bằng Email, Facebook hoặc tài khoản Google.</p>
                    <p><img src="img/aboutus/rsz_login.jpg" alt="Mioto - Thuê xe tự lái"></p>
                    <div class="space l"></div>
                    <h5>Bước 2: Đăng kí xe</h5>
                    <p>Chọn mục "Đăng kí xe" và điền các thông tin về chiếc xe bạn muốn đăng kí. </p>
                    <p>(gồm hình ảnh xe, dòng xe, số km đã đi, bảo hiểm xe, các giấy tờ xe liên quan, các tiện
                        ích đi kèm, bảng giá cho thuê, hình thức khuyến mãi, phương thức và phí giao nhận xe,
                        danh sách các ngày cho thuê)</p>
                    <div class="space l"></div>
                    <h5>Bước 3: Chờ phê duyệt</h5>
                    <p>Trong thời gian 1 ngày làm việc. Nếu thỏa mãn các tiêu chí, xe của bạn sẽ được chấp thuận
                        đăng kí trên sàn giao dịch.</p>
                    <p>Trường hợp các xe không đáp ứng tiêu chí tuyển lựa, công ty sẽ gửi email thông báo lí do
                        đến bạn.</p>
                </div>
            </div>
        </div>
        <div class="np-bottom">
            <div class="np-bottom-container">
                <div class="np-main">
                    <div class="np-prev"><span>Trở Về</span><a href="Ownerbenef"><em>Lợi
                                ích chủ xe</em></a></div>
                    <div class="np-prev np-next"><span>Kế tiếp</span><a href="Renterhowto"><em>Quy trình thuê xe</em></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div canvas="container" id="root">
        <div class="mioto-layout">
            
            
            
        </div>
    </div>
@endsection
