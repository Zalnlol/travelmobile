@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Personalinfo')

@section('bodycode')

    <section class="body">
        <div class="body-container">
            <div class="sidebar">
                <div class="rent-car has-scroll">
                    <div class="scroll-inner">
                        <ul>
                            <br>
                            <br>
                            <br>
                            <li><a href="Term">Nguyên tắc chung</a></li>
                            <li><a href="PolicieRegulation">Chính sách và quy định</a>
                                <ul>
                                    <li><a href="PolicieRegulation#responsibility">1. Trách nhiệm của
                                            khách thuê và chủ xe </a></li>
                                    <li><a href="PolicieRegulation#TravelMobile-responsibility">2. Trách
                                            nhiệm của TravelMobile khi có sự cố </a></li>
                                    <li><a href="PolicieRegulation#canceltrip">3. Chính sách huỷ
                                            chuyến</a></li>
                                    <li><a href="PolicieRegulation#price">4. Chính sách giá</a></li>
                                    <li><a href="PolicieRegulation#payment">5. Chính sách thanh toán
                                        </a></li>
                                    <li><a href="PolicieRegulation#transaction">6. Chính sách giao
                                            nhận</a></li>
                                    <li><a href="PolicieRegulation#quickcancel">7. Chính sách kết
                                            thúc sớm chuyến</a></li>
                                </ul>
                            </li>
                            <li><a href="">Câu hỏi và trả lời</a>
                                <ul>
                                    <li><a href="">Dành cho khách thuê xe</a>
                                    </li>
                                    <li><a href="">Dành cho chủ xe</a></li>
                                    <li><a href="">Dành chung </a></li>
                                </ul>
                            </li>
                            <li><a href="Regu">Quy chế hoạt động</a></li>
                            <li><a class="active" aria-current="page" href="Personalinfo">Bảo mật thông
                                    tin cá nhân</a></li>
                            <li><a href="Resolveconflic">Giải quyết khiếu nại</a></li>
                        </ul>
                        <div class="space m"></div>
                    </div>
                </div>
            </div>
            <div class="content">
                <br>
                <br>
                <br>
                <h2 class="title">Chính sách bảo mật thông tin cá nhân</h2>
                <div class="content-container">
                    <h3 class="title">1. Mục đích sử dụng thông tin</h3>
                    <p>Thông tin cá nhân của Khách hàng chỉ được dùng trong những mục đích sau đây</p>
                    <p>Hỗ trợ việc đặt xe và cung cấp xe cho Khách hàng;</p>
                    <p>Liên lạc với Khách hàng trong cho mục đích tiếp thị của Công ty;</p>
                    <p>Nâng cao chất lượng dịch vụ và hỗ trợ Khách hàng;</p>
                    <p>Giải quyết các sự vụ và tranh chấp phát sinh liên quan đến việc sử dụng dịch vụ trên Sàn
                        giao dịch;</p>
                    <p>Cung cấp thông tin cho các Cơ quan thực thi Pháp luật theo yêu cầu;</p>
                    <p>Khi khách hàng đăng ký tài khoản TravelMobile.vn, thông tin cá nhân mà chúng tôi thu thập bao
                        gồm:</p>
                    <p>+ Tên đăng kí, số điện thoại</p>
                    <p>+ Email, mật khẩu</p>
                    <h3 class="title">2. Phạm vi sử dụng thông tin</h3>
                    <p>Công ty sử dụng thông tin Khách hàng cung cấp để:</p>
                    <p>Gửi các thông báo về các hoạt động trao đổi thông tin giữa Khách hàng và Công ty;</p>
                    <p>Ngăn ngừa các hoạt động phá hủy tài khoản người dùng của Khách hàng hoặc các hoạt động
                        giả mạo Khách hàng;</p>
                    <p>Liên lạc và giải quyết với Khách hàng trong những trường hợp đặc biệt;</p>
                    <p>Không sử dụng thông tin cá nhân của Khách hàng ngoài mục đích xác nhận và liên hệ có liên
                        quan đến đặt xe và cung cấp xe.</p>
                    <p>Trong trường hợp có yêu cầu của Pháp luật: Công ty có trách nhiệm hợp tác cung cấp thông
                        tin cá nhân của Khách hàng khi có yêu cầu từ Cơ quan Tư pháp bao gồm: Viện kiểm sát, Tòa
                        án, Cơ quan Công an điều tra liên quan đến hành vi vi phạm pháp luật nào đó của Khách
                        hàng. Ngoài ra, không ai có quyền xâm phạm vào thông tin cá nhân của Khách hàng.</p>
                    <h3 class="title">3. Thời gian lưu trữ thông tin</h3>
                    <p>Dữ liệu cá nhân của Khách hàng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ hoặc tự
                        Khách hàng đăng nhập và thực hiện hủy bỏ. Còn lại trong mọi trường hợp thông tin cá nhân
                        của Khách hàng sẽ được bảo mật trên máy chủ của Công ty.</p>
                    <h3 class="title">4. Những người hoặc tổ chức có thể được tiếp cận với thông tin</h3>
                    <p>Chỉ Công ty mới có quyền tiếp cận thông tin Khách hàng, hoặc Cơ quan Nhà nước có thẩm
                        quyền khi được yêu cầu cung cấp thông tin.</p>
                    <h3 class="title">5. Địa chỉ của đơn vị thu thập và quản lý thông tin cá nhân</h3>
                    <p>Công ty Cổ phần TravelMobile Việt Nam</p>
                    <p>Trụ sở chính: 2 Hồng Hà, Phường 2, Quận Tân Bình, TPHCM.</p>
                    <p>Số điện thoại: 1900 9217</p>
                    <p>Email: support@TravelMobile.vn</p>
                    <h3 class="title">6. Phương tiện và công cụ để người dùng tiếp cận và chỉnh sửa dữ liệu cá
                        nhân của mình</h3>
                    <p>Khách hàng có quyền tự kiểm tra, cập nhật, điều chỉnh hoặc hủy bỏ thông tin cá nhân của
                        mình bằng cách đăng nhập vào tài khoản và chỉnh sửa thông tin cá nhân hoặc yêu cầu
                        TravelMobile.vn thực hiện việc này.</p>
                    <p>Khách hàng có quyền gửi khiếu nại về việc lộ thông tin cá nhân cho bên thứ 3 đến Ban quản
                        trị của Sàn giao dịch TMĐT TravelMobile.vn. Khi tiếp nhận những phản hồi này, TravelMobile.vn sẽ xác
                        nhận lại thông tin, có trách nhiệm trả lời lý do và hướng dẫn khách hàng khôi phục và
                        bảo mật thông tin.</p>
                    <h3 class="title">7. Cam kết bảo mật thông tin cá nhân</h3>
                    <p>Thông tin cá nhân của thành viên trên Sàn giao dịch TMĐT TravelMobile.vn được cam kết bảo mật
                        tuyệt đối theo chính sách bảo vệ thông tin cá nhân của TravelMobile.vn. Việc thu thập và sử
                        dụng thông tin của mỗi thành viên chỉ được thực hiện khi có sự đồng ý của khách hàng đó
                        trừ những trường hợp pháp luật có quy định khác.</p>
                    <p>Không sử dụng, không chuyển giao, cung cấp hay tiết lộ cho bên thứ ba nào về thông tin cá
                        nhân của thành viên khi không có sự cho phép đồng ý từ thành viên.</p>
                    <p>Trong trường hợp máy chủ lưu trữ thông tin bị hacker tấn công dẫn đến mất mát dữ liệu cá
                        nhân thành viên, TravelMobile.vn sẽ có trách nhiệm thông báo vụ việc cho cơ quan chức năng điều
                        tra xử lý kịp thời và thông báo cho thành viên được biết.</p>
                    <p>Bảo mật tuyệt đối mọi thông tin giao dịch trực tuyến của thành viên bao gồm thông tin hóa
                        đơn kế toán chứng từ số hóa tại khu vực dữ liệu trung tâm an toàn cấp 1 của TravelMobile.vn.
                    </p>
                    <p>Ban quản lí Sàn giao dịch yêu cầu các cá nhân khi đăng ký là thành viên, phải cung cấp
                        đầy đủ thông tin cá nhân có liên quan như: Họ và tên, địa chỉ liên lạc, email, số chứng
                        minh nhân dân, điện thoại, số tài khoản, số thẻ thanh toán …., và chịu trách nhiệm về
                        tính pháp lý của những thông tin trên. Ban quản lí không chịu trách nhiệm cũng như không
                        giải quyết mọi khiếu nại có liên quan đến quyền lợi của thành viên đó nếu xét thấy tất
                        cả thông tin cá nhân của thành viên đó cung cấp khi đăng ký ban đầu là không chính xác.
                    </p>
                    <h3 class="title">8. Cơ chế tiếp nhận và giải quyết khiếu nại liên quan đến việc thông tin
                        cá nhân khách hàng</h3>
                    <p>Người dùng có quyền gửi khiếu nại liên quan đến việc thực hiện chính sách bảo mật thông
                        tin đến Ban quản lí Sàn giao dịch TMĐT TravelMobile. Khi tiếp nhận những phản hồi này, Sàn giao
                        dịch TMĐT TravelMobile sẽ xác nhận lại thông tin, và có trách nhiệm phản hồi lý do và hướng dẫn
                        thành viên khôi phục và bảo mật lại thông tin. Các bước thực hiện như sau:</p>
                    <p>Bước 1: Tiếp nhận khiếu nại</p>
                    <p>Khách hàng gửi khiếu nại cho Sàn giao dịch TMĐT TravelMobile theo các kênh như email, điện thoại
                        hoặc gửi văn bản trực tiếp đến địa chỉ của Sàn giao dịch. Bộ phận CSKH của Sàn giao dịch
                        có trách nhiệm tiếp nhận và yêu cầu khách hàng nêu rõ nội dung khiếu nại và cung cấp các
                        thông tin, tài liệu có liên quan.</p>
                    <p>Bước 2: Xác minh nội dung khiếu nại</p>
                    <p>Sau khi tiếp nhận, Bộ phận CSKH sẽ căn cứ trên nội dung khiếu nại, thực hiện phân loại và
                        chuyển nội dung khiếu nại đến Bộ phận phụ trách để xử lý.</p>
                    <p>Bước 3: Tổng hợp kết quả xử lý khiếu nại và thực hiện phản hồi cho khách hàng (gọi điện
                        thoại và/hoặc gửi email cho khách hàng).</p>
                    <div class="space l"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
