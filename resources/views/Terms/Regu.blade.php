@extends('layoutUser.layout')
@section('titleweb', 'Regu')

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
                            <li><a class="active" aria-current="page" href="Regu">Quy chế
                                    hoạt động</a></li>
                            <li><a href="Personalinfo">Bảo mật thông tin cá nhân</a></li>
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
                <div class="content-container">


                    <h4 id="">I. Nguyên tắc chung</h4>
                    <p>Sàn giao dịch TMĐT TravelMobile.vn (sau đây gọi tắt là “Sàn giao dịch") do Công ty Cổ phần
                        TravelMobile
                        Việt Nam ("Công ty") xây dựng và vận hành. Thành viên trên Sàn giao dịch là các thương
                        nhân, tổ chức, cá nhân có hoạt động thương mại hợp pháp được Ban Quản lí Sàn giao dịch
                        TMĐT TravelMobile.vn ("Ban Quản lí") chính thức công nhận và được phép sử dụng dịch vụ của Sàn
                        giao dịch và các bên liên quan cung cấp.</p>
                    <p>Nguyên tắc này áp dụng cho các Thành viên đăng ký sử dụng, tham gia đăng thông tin được
                        thực hiện trên Sàn giao dịch.</p>
                    <p>Thương nhân, tổ chức, cá nhân tham gia giao dịch tại Sàn giao dịch tự do thỏa thuận trên
                        cơ sở tôn trọng quyền và lợi ích hợp pháp của các bên tham gia hoạt động cung ứng và sử
                        dụng dịch vụ không trái với qui định của Pháp luật.</p>
                    <p>Thông tin về thương nhân, tổ chức, cá nhân tham gia là Thành viên trên TravelMobile.vn phải minh
                        bạch và chính xác.</p>
                    <p>Dịch vụ được giới thiệu trên Sàn giao dịch phải đáp ứng đầy đủ các quy định của Pháp luật
                        có liên quan, không thuộc các trường hợp cấm kinh doanh, cấm quảng cáo theo quy định của
                        Pháp luật.</p>
                    <p>Tất cả các nội dung trong Quy chế này phải tuân thủ theo hệ thống Pháp luật hiện hành của
                        Việt Nam. Thành viên khi tham gia vào Sàn giao dịch phải tự tìm hiểu trách nhiệm pháp lý
                        của mình đối với Pháp luật hiện hành của Việt Nam và cam kết thực hiện đúng những nội
                        dung trong Quy chế của Sàn giao dịch.</p>
                    <div class="space l"></div>
                    <h4 id="">II. Quy định chung</h4>
                    <h3 class="title">1. Định nghĩa chung</h3>
                    <p>Tên miền Sàn Giao dịch TMĐT TravelMobile.vn: do Công ty Cổ phần TravelMobile Việt Nam phát triển với
                        tên miền của Sàn giao dịch là TravelMobile.vn.</p>
                    <p>Người bán (Chủ xe/Đối tác): là thương nhân, tổ chức, cá nhân có nhu cầu sử dụng dịch vụ
                        của Sàn giao dịch để: giới thiệu xe cho thuê, dịch vụ cho thuê xe…</p>
                    <p>Người mua (Khách thuê xe/Khách hàng): là thương nhân, tổ chức, cá nhân có nhu cầu tìm
                        hiểu thông tin và sử dụng dịch vụ được đăng bán trên Sàn giao dịch. Người mua có quyền
                        đăng ký tài khoản hoặc không cần đăng ký.</p>
                    <p>Thành viên: là bao gồm cả Người bán (Chủ xe) lẫn Người mua (Khách hàng). Thành viên tham
                        gia giao dịch trên Sàn giao dịch là thương nhân, tổ chức, cá nhân có nhu cầu thuê và cho
                        thuê trên website TravelMobile.vn. Thành viên phải đăng ký kê khai ban đầu các thông tin cá
                        nhân có liên quan, được Ban Quản lí Sàn giao dịch chính thức công nhận và được phép sử
                        dụng dịch vụ do Sàn giao dịch cung cấp.</p>
                    <p>Sản phẩm/Dịch vụ: là dịch vụ cho thuê xe ô tô được giao dịch trên Sàn giao dịch.</p>
                    <p>TMĐT: Thương mại điện tử</p>
                    <p>Sở hữu trí tuệ: là bất kỳ bằng sáng chế, bản quyền, thiết kế được đăng ký hoặc chưa đăng
                        ký, quyền đối với thiết kế, nhãn hiệu được đăng ký hoặc chưa đăng ký, nhãn hiệu dịch vụ
                        hoặc quyền sở hữu công nghiệp hoặc sở hữu trí tuệ khác và bao gồm các ứng dụng cho bất
                        kỳ mục nào trong những mục trên Sàn giao dịch</p>
                    <p>Nội dung bản Quy chế này tuân thủ theo các quy định hiện hành của Pháp luật Việt Nam.
                        Thành viên khi tham gia giao dịch trên Sàn giao dịch phải tự tìm hiểu trách nhiệm pháp
                        lý của mình đối với Pháp luật hiện hành của Việt Nam và cam kết thực hiện đúng những Nội
                        dung trong Quy chế của Sàn giao dịch.</p>
                    <h3 class="title">2. Hướng dẫn sử dụng chung</h3>
                    <p>Công ty sẽ cấp một tài khoản (Account) để Thành viên có thể sử dụng dịch trên Sàn giao
                        dịch trong khuôn khổ Điều khoản sử dụng đã đề ra. Thành viên sẽ phải đăng ký tài khoản
                        với thông tin xác thực về bản thân và phải cập nhật nếu có bất kỳ thay đổi nào. Thành
                        viên xác nhận rằng những thông tin cung cấp là sự thật và chính xác. Mỗi Thành viên truy
                        cập phải có trách nhiệm với mật khẩu, tài khoản, hoạt động của mình trên website và phải
                        thông báo cho Ban Quản lí biết khi tài khoản bị truy cập trái phép.</p>
                    <p>Công ty không chịu bất kỳ trách nhiệm nào, dù trực tiếp hay gián tiếp, đối với những
                        thiệt hại hoặc mất mát gây ra do Thành viên không tuân thủ quy định. Thành viên sử dụng
                        dịch vụ của Sàn giao dịch với mục đích duy nhất là dành cho cá nhân mình. Thành viên
                        không thể ủy quyền cho người khác sử dụng trạng thái khách hàng của mình, và không thể
                        ấn định hay chuyển giao tài khoản của mình cho bất kỳ ai hoặc một thực thể nào khác. Bên
                        cạnh đó, Thành viên đồng ý tuân thủ tất cả các quy định Pháp luật liên quan được áp dụng
                        tại quốc gia của mình, tại đất nước, thành phố mà Thành viên đang sinh sống có sử dụng
                        dịch vụ của Sàn giao dịch. Thành viên chỉ có thể truy cập vào website của Sàn giao dịch
                        bằng cách sử dụng các cách thức được cho phép.</p>
                    <p>Thành viên có trách nhiệm phải kiểm tra để đảm bảo rằng Thành viên đã truy cập đúng
                        website dành cho thiết bị của mình. Công ty không chịu trách nhiệm nếu Thành viên không
                        có một thiết bị tương thích để truy cập website của Sàn giao dịch. Công ty giữ quyền
                        chấm dứt thỏa thuận này nếu Thành viên sử dụng website với một thiết bị không tương
                        thích hay không được cho phép.</p>
                    <p>Thành viên sẽ chỉ sử dụng website cho các mục đích hợp pháp; tuyệt đối sẽ không sử dụng
                        website để gửi và lưu trữ bất kỳ dữ liệu trái phép nào hoặc phục vụ các mục đích lừa
                        đảo. Thành viên sẽ không sử dụng website của Sàn giao dịch để gây phiền toái, khó chịu,
                        bất tiện hoặc làm giả yêu cầu đặt xe. Thành viên sẽ không gây ảnh hưởng đến hoạt động
                        bình thường của Sàn giao dịch. Thành viên sẽ không cố gắng gây tổn hại cho Sàn giao dịch
                        bằng bất kỳ cách nào. Thành viên sẽ không sao chép, hoặc phân phối các nội dung thuộc về
                        Sàn giao dịch mà không có sự cho phép bằng văn bản của Công ty. Thành viên đồng ý rằng
                        việc sử dụng dịch vụ trên Sàn giao dịch của Thành viên sẽ tùy thuộc vào Chính sách bảo
                        mật của Công ty có thể được sửa đổi theo thời gian.</p>
                    <p>Công ty nghiêm cấm sử dụng bất kỳ phần nào của trang web này với mục đích thương mại hoặc
                        nhân danh bất kỳ đối tác thứ ba nào nếu không được Công ty cho phép bằng văn bản. Nếu vi
                        phạm bất cứ điều nào trong đây, Công ty sẽ hủy tài khoản của Thành viên mà không cần báo
                        trước.</p>
                    <p>Trong suốt quá trình đăng ký, Thành viên đồng ý nhận thông tin tiếp thị từ Sàn giao dịch.
                        Nếu không muốn tiếp tục nhận thông tin tiếp thị, Thành viên có thể từ chối bằng cách gọi
                        điện cho Công ty theo số điện thoại 1900 9217 hoặc gửi email cho Bộ phận Chăm sóc Khách
                        hàng của Công ty tại support@TravelMobile.vn</p>
                    <h3 class="title">3. Điều khoản sử dụng</h3>
                    <p>Khi tham gia hoạt động trên Sàn giao dịch TMĐT TravelMobile.vn có nghĩa là Thành viên đồng ý với
                        các điều khoản dưới đây.</p>
                    <p>Các điều kiện, điều khoản và nội dung tại Sàn giao dịch và hợp đồng phát sinh bị chi phối
                        và được hiểu theo Luật pháp của Việt Nam. Toàn bộ tranh chấp phát sinh bởi Điều khoản sử
                        dụng này sẽ được giải quyết bởi Tòa án có thẩm quyền tại Việt Nam.</p>
                    <h3 class="title">4. Thương hiệu và bản quyền</h3>
                    <p>Mọi quyền sở hữu trí tuệ (đã đăng ký hoặc chưa đăng ký), nội dung thông tin và tất cả các
                        thiết kế, văn bản, đồ họa, phần mềm, hình ảnh, video, âm nhạc, âm thanh, biên dịch phần
                        mềm, mã nguồn và phần mềm cơ bản đều là tài sản của Công ty Cổ phần TravelMobile Việt Nam. Với
                        bản quyền đã được bảo lưu, toàn bộ nội dung của website TravelMobile.vn được bảo vệ bởi Luật
                        bản quyền của Việt Nam và các Công ước Quốc tế.</p>
                    <p>Thỏa thuận này không phải là một thương vụ mua bán và không chuyển nhượng cho khách hàng
                        bất kỳ quyền sở hữu nào có liên quan đến website TravelMobile.vn, hoặc bất kỳ quyển sở hữu tài
                        sản trí tuệ nào thuộc sở hữu của Công ty: tên Công ty, logo Công ty, logo của dịch vụ,
                        tên sản phẩm liên quan đến dịch vụ. Bất kỳ tranh chấp nào phát sinh từ việc sử dụng trái
                        phép website TravelMobile.vn và tài sản trí tuệ thuộc sở hữu của Công ty sẽ được giải quyết bởi
                        Pháp luật Việt Nam và Tòa án có thẩm quyền tại Việt Nam.</p>
                    <h3 class="title">5. Chấp nhận đơn hàng và giá cả</h3>
                    <p>Giá cả dịch vụ tại Sàn giao dịch là giá đã bao gồm thuế Giá trị gia tăng (VAT). Giá cả
                        của dịch vụ có thể thay đổi tùy thời điểm và chương trình khuyến mãi kèm theo.</p>
                    <p>Công ty có quyền từ chối hoặc hủy hợp đồng của Khách hàng vì bất kỳ lý do gì liên quan
                        đến lỗi kỹ thuật, hệ thống một cách khách quan vào bất kỳ lúc nào.</p>
                    <p>Công ty cam kết sẽ cung cấp thông tin giá cả chính xác nhất cho Khách hàng. Mặc dù Công
                        ty cố gắng tốt nhất để bảo đảm rằng tất cả các thông tin và giá hiển thị là chính xác,
                        tuy nhiên, đôi lúc vẫn có sai sót xảy ra, tùy theo từng trường hợp Công ty sẽ liên hệ
                        hướng dẫn hoặc thông báo hủy hợp đồng đó và hoàn tiền cho Khách hàng.</p>
                    <p>Khác biệt giá: Các xe thành viên hoạt động tại Sàn giao dịch có thể cùng cung cấp một (1)
                        sản phẩm giống nhau với chính sách giá khác nhau, Khách hàng có quyền lựa chọn và so
                        sánh giá cả giữa các xe thành viên để có được mức giá hợp lý nhất cho yêu cầu đặt xe của
                        mình. Công ty không can thiệp về chính sách giá của từng xe thành viên nếu có phát sinh
                        tranh chấp.</p>
                    <p>Công ty cũng có quyền từ chối hoặc hủy bỏ bất kỳ hợp đồng nào dù hợp đồng đó đã hay chưa
                        được xác nhận hoặc đã thanh toán.</p>
                    <div class="space l"></div>
                    <h4 id="">III. Quy trình giao dịch</h4>
                    <h3 class="title">1. Quy trình dành cho người mua (khách hàng)</h3>
                    <p> Để thuê xe trên Sàn giao dịch, Khách hàng vào website TravelMobile.vn và thực hiện các bước
                        sau:</p>
                    <p>Bước 1: Khách hàng truy cập vào website TravelMobile.vn và đăng nhập vào tài khoản của mình, nếu
                        Khách hàng chưa có tài khoản thì có thể đăng ký tạo tài khoản bằng Email, Facebook hoặc
                        tài khoản Google.</p>
                    <p>Bước 2: Tìm kiếm – Nhập địa điểm và khoảng thời gian Khách hàng muốn thuê xe, sau đó chọn
                        tìm kiếm.</p>
                    <p>Bước 3: Chọn xe – Sau khi chọn tìm kiếm, trên website sẽ hiển thị các kết quả tìm kiếm,
                        Khách hàng sẽ thấy được danh sách xe phù hợp tiêu chí tìm kiếm cùng với hình ảnh xe, giá
                        thuê, điểm rating của các khách thuê xe trước đó. Khách hàng có thể điều chỉnh thời gian
                        thuê và lọc kết quả tìm kiếm theo các tiêu chí khác nhau để có được danh sách xe phù hợp
                        theo ý Khách hàng. Sau đó Khách hàng lựa chọn xe ưng ý để xem chi tiết hơn hình ảnh xe,
                        mô tả xe, giá thuê xe, khuyến mãi, hình thức giao nhận xe, thông tin Người bán (Chủ xe),
                        điểm rating của xe và Chủ xe...</p>
                    <p>Bước 4: Đặt xe – Sau khi xem thông tin chi tiết xe và xác định được xe phù hợp, Khách
                        hàng có thể lựa chọn phương thức giao nhận và tiến hành Yêu cầu thuê xe. Khi đó, trên
                        website sẽ hiển thị Thông tin chuyến đi (Trip Summary), bao gồm chi tiết hành trình,
                        thông tin xe, giá thuê cơ bản, khuyến mãi, chi phí giao nhận xe và tổng số tiền. Bên
                        dưới Bảng báo giá sẽ có mục trống để Khách hàng có thể gửi lời nhắn đến Chủ xe. Chủ xe
                        sau khi nhận được Yêu cầu thuê xe từ phía Khách hàng sẽ xem xét và duyệt Yêu cầu thuê
                        xe.</p>
                    <p>Sau khi Yêu cầu thuê xe được duyệt, khách hàng thực hiện thanh toán tiền cọc 30% tổng số
                        tiền hiển thị trên Thông tin chuyến đi. Sau khi đã đặt xe thành công, TravelMobile sẽ gửi biên
                        nhận điện tử (E-receipt) (xác nhận lại các thời gian hành trình, thông tin xe, giá thuê,
                        số tiền đã đặt cọc, số tiền còn lại cần thanh toán trực tiếp cho Chủ xe) cùng với Mã
                        chuyến đi qua địa chỉ email của Khách hàng. Chủ xe cũng sẽ nhận được biên nhận điện tử
                        để bảo đảm sẽ thực hiện đầy đủ các thỏa thuận đã cam kết với Khách hàng.</p>
                    <p>Trước thời điểm thuê xe 1-2 ngày, TravelMobile sẽ liên hệ với Khách hàng và Chủ xe để xác nhận
                        lại các nội dung trong biên nhận điện tử để đảm bảo việc thuê xe sẽ diễn ra như kế
                        hoạch. Khi đến thời điểm thuê xe, Khách hàng sẽ đến địa điểm của Chủ xe để nhận xe hoặc
                        Chủ xe sẽ đưa xe đến trực tiếp địa chỉ của Khách hàng tùy theo phương phức giao nhận
                        Khách hàng đã lựa chọn khi đặt xe.</p>
                    <p>Trước khi giao xe, Khách hàng và Chủ xe sẽ kí Hợp đồng thuê xe và Biên bản bàn giao xe,
                        Khách hàng cần kiểm tra kĩ tình trạng xe (bên ngoài và nội thất) trước khi kí Biên bản
                        bàn giao xe (ở mục "Tình trạng xe khi nhận"). Hợp đồng thuê xe và Biên bản bàn giao xe
                        được lập thành 2 bản, Chủ xe và Khách hàng mỗi bên giữ 1 bản. Sau khi thực hiện xong Hợp
                        đồng, Khách hàng cùng Chủ xe sẽ xác nhận lại tình trạng xe. Khách hàng đề nghị Chủ xe kí
                        vào Biên bản bàn giao xe (ở mục "Tình trạng xe khi hoàn trả") để làm bằng chứng đã hoàn
                        trả xe đúng nguyên trạng, dư phòng trong trường hợp có tranh chấp. Khách hàng sau đó sẽ
                        thanh toán số tiền còn lại với Chủ xe kể cả phần phát sinh.</p>
                    <h3 class="title">2. Quy trình dành cho người bán (chủ xe)</h3>
                    <p>Các thông tin đăng ký được yêu cầu phải đầy đủ, đúng chính tả, thống nhất với nhau, không
                        vi phạm về đăng tin nói chung. Thông tin đăng ký phải trung thực, rõ ràng, không gây
                        nhầm lẫn hoặc hiểu lầm đối với người xem về uy tín cho thuê xe cũng như các thông tin
                        nhận biết khác. Để đăng kí thông tin xe lên Sàn giao dịch, Người bán (Chủ xe) thực hiện
                        theo hướng dẫn dưới đây:</p>
                    <p>Bước 1: Trước tiên người bán truy cập vào website https://www.TravelMobile.vn, click chuột vào
                        nút “Đăng kí”. Hoặc có thể dùng các tài khoản Facebook, Google để đăng ký. </p>
                    <p>Bước 2: Tiến hành khai thông tin cá nhân theo mẫu hướng dẫn.</p>
                    <p>Bước 3: Đăng tải thông tin xe cho thuê</p>
                    <p>Chủ xe gửi thông tin xe cho thuê đến bộ phận kiểm duyệt nội dung để bộ phận này tiến hành
                        đăng tải thông tin hộ thì bộ phận kiểm duyệt thông tin sẽ tiến hành xác minh, xác thực
                        lại nội dung sẽ đăng. Những nội dung vi phạm bộ phận kiểm duyệt sẽ từ chối không đăng
                        tải lên website.</p>
                    <h3 class="title">3. Quy trình nhận dịch vụ</h3>
                    <p>Khi đến thời điểm thuê xe, Khách hàng sẽ đến địa điểm của Chủ xe để nhận xe hoặc Chủ xe
                        sẽ đưa xe đến trực tiếp địa chỉ của Khách hàng tùy theo phương phức giao nhận Khách hàng
                        đã lựa chọn khi đặt xe.</p>
                    <p>Trước khi giao xe, Khách hàng và Chủ xe sẽ kí Hợp đồng thuê xe và Biên bản bàn giao xe,
                        Khách hàng cần kiểm tra kĩ tình trạng xe (bên ngoài và nội thất) trước khi kí Biên bản
                        bàn giao xe.</p>
                    <p>Trong quá trình thực hiện nếu xảy ra tranh chấp thì Khách hàng và Chủ xe chủ động liên hệ
                        với nhau để giải quyết các vấn đề dựa trên các điều khoản của Hợp đồng thuê xe đã ký.
                        Công ty sẽ hỗ trợ 2 bên trong khả năng của mình. Công ty đề nghị các bên tham gia Sàn
                        giao dịch khi tiến hành giao dịch phải có ký kết Hợp đồng thuê xe và Biên bản bàn giao
                        xe.</p>
                    <p>Sau khi thực hiện xong Hợp đồng thuê xe, Khách hàng cùng Chủ xe xác nhận lại tình trạng
                        xe, cả 2 bên cùng kí vào Biên bản bàn giao xe (ở mục "Tình trạng xe khi hoàn trả") và
                        mỗi bên giữ lại 1 bản để làm bằng chứng đã hoàn trả xe đúng nguyên trạng, dư phòng trong
                        trường hợp có tranh chấp.</p>
                    <h3 class="title">4. Quy trình thay đổi dịch vụ</h3>
                    <p>Hệ thống Công ty không hỗ trợ tính năng thay đổi lịch trình, vì thế trong trường hợp
                        khách hàng sau khi đã đặt cọc và muốn thay đổi thời gian chuyến đi hay loại xe thì cần
                        tiến hành hủy chuyến và đặt lại chuyến mới.</p>
                    <h3 class="title">5.Quy trình hủy dịch vụ</h3>
                    <p>Khi muốn hủy chuyến đi đã đặt cọc, Khách hàng thực hiện theo các bước sau đây:</p>
                    <p>Bước 1: Thông báo tới Sàn giao dịch về việc thay đổi chuyến đi bằng các cách:</p>
                    <p>1.a Truy cập vào website TravelMobile.vn, đăng nhập vào tài khoản của Khách hàng, vào mục "Thông
                        báo", chọn "Sắp tới", Khách hàng sẽ thấy danh sách các chuyến đi sắp tới đã đã đặt cọc,
                        chọn chuyến đi cần hủy, chọn Hủy và xác nhận để gửi "Yêu cầu hủy chuyến" đến chủ xe.</p>
                    <p>1.b Gọi điện đến Bộ phận Chăm sóc Khách hàng tại số điện thoại 1900 9217 để được hỗ trợ.
                    </p>
                    <p>Bước 2: Bộ phận Chăm sóc Khách hàng sẽ liên hệ với phía Chủ xe, xác nhận thông tin hủy
                        chuyến và tính phí vi phạm (nếu có), gửi thông tin qua mail cho Khách hàng đồng thời gửi
                        thông tin tới Chủ xe.</p>
                    <p>Bước 3: Hoàn trả tiền cho Khách hàng sau khi cấn trừ tiền đặt cọc với phí hủy chuyến và
                        phí chuyển khoản.</p>
                    <h3 class="title">6. Quy trình giải quyết khiếu nại</h3>
                    <p>Công ty và Chủ xe có trách nhiệm tiếp nhận các khiếu nại và hỗ trợ Khách hàng liên quan
                        đến các giao dịch được kết nối thông qua Sàn giao dịch. Các khiếu nại liên quan đến việc
                        cung cấp, sử dụng dịch vụ thuê xe trên Sàn giao dịch do Công ty chịu trách nhiệm độc lập
                        giải quyết trên cơ sở quy định của pháp luật, Điều khoản và Điều kiện sử dụng dịch vụ,
                        các thông báo, quy chế đã công bố với Thành viên (Khách hàng và Chủ xe). Khi phát sinh
                        tranh chấp, Công ty đề cao giải pháp thương lượng, hòa giải giữa các bên nhằm duy trì sự
                        tin cậy của Thành viên vào chất lượng dịch vụ của Sàn giao dịch. Khách hàng có thể thực
                        hiện theo các bước sau:</p>
                    <p>Bước 1: Khách hàng khiếu nại về dịch vụ qua số điện thoại 1900 9217 hoặc gửi mail cho Bộ
                        phận Chăm sóc Khách hàng tại địa chỉ support@TravelMobile.vn. Thời gian để Công ty tiếp nhận
                        khiếu nại là 3 ngày kể từ ngày sử dụng dịch vụ hoặc từ ngày phát sinh sự việc.</p>
                    <p>Bước 2: Trong thời hạn (3) ngày làm việc kể từ khi tiếp nhận thông tin khiếu nại của
                        Khách hàng, Bộ phận Chăm sóc Khách hàng xác nhận thông tin khiếu nại, tiến hành phân
                        loại thông tin và thông báo cho Khách hàng:</p>
                    <p>2a. Ghi nhận các yêu cầu và các khiếu nại có liên quan đến Công ty và trong thời hạn
                        khiếu nại.</p>
                    <p>2b. Từ chối các yêu cầu, các khiếu nại không có liên quan đến Công ty và hết thời hạn
                        khiếu nại.</p>
                    <p>Bước 3: Giải quyết vấn đề</p>
                    <p>Bộ phận Chăm sóc Khách hàng sẽ tiến hành xác minh, kiểm chứng và phân tích tính chất và
                        mức độ của nội dung khiếu nại, phạm vi khiếu nại và trách nhiệm xử lý để phối hợp với
                        Chủ xe và Bên cung cấp dịch vụ thứ 3 đưa ra biện pháp cụ thể để hỗ trợ Khách hàng giải
                        quyết tranh chấp đó.</p>
                    <p>3a. Chuyển các vấn đề có liên quan trực tiếp đến Công ty cho các Bộ phận có liên quan
                        kiểm tra và đối chiếu.</p>
                    <p>3b. Chuyển các vấn đề có liên quan cho Chủ xe giải quyết.</p>
                    <p>Trong thời hạn ba (3) ngày làm việc kể từ khi tiếp nhận thông báo về khiếu nại, Chủ xe có
                        trách nhiệm phối hợp với TravelMobile để giải quyết, xử lý khiếu nại. Chủ xe sẽ thông báo cho
                        Khách hàng biện pháp xử lý hoặc ủy quyền thông báo cho Công ty.</p>
                    <p>Bước 4: Đóng khiếu nại</p>
                    <p>4a. Khách hàng đồng ý với các phản hồi của Bộ phận Chăm sóc Khách hàng -&gt; Kết thúc
                        khiếu nại. Khách hàng không đồng ý -&gt; Quay lại bước 3</p>
                    <p>4b. Theo dõi các giải quyết khiếu nại của Chủ xe -&gt; Kết thúc khiếu nại khi Khách hàng
                        và Chủ xe đã thỏa thuận xong.</p>
                    <p>Khi nhận được thông báo về biện pháp xử lý từ Chủ xe nhưng Khách hàng không đồng ý thì
                        Công ty sẽ chủ trì việc thương lượng, hòa giải giữa Khách hàng và Chủ xe để đi đến kết
                        quả giải quyết phù hợp với cả hai bên. Trong trường hợp Khách hàng và Chủ xe không đi
                        đến thỏa thuận chung hoặc Khách hàng không đồng ý với những biện pháp giải quyết cuối
                        cùng của Chủ xe và/hoặc nằm ngoài khả năng và thẩm quyền của Công ty thì Khách hàng hoặc
                        Chủ xe có thể nhờ đến Cơ quan Nhà nước có thẩm quyền can thiệp và giải quyết theo Pháp
                        luật nhằm đảm bảo lợi ích hợp pháp của các bên.</p>
                    <p>Công ty tôn trọng và nghiêm túc thực hiện các quy định của Pháp luật về Bảo vệ quyền lợi
                        của người dùng. Công ty khuyến nghị Khách hàng và Chủ xe cung cấp chính xác, trung thực,
                        chi tiết các thông tin cá nhân và nội dung đăng tin liên quan đến dịch vụ. Chúng tôi
                        cũng đề nghị Chủ xe cần nghiêm túc tuân thủ các quy định của Pháp luật, cũng như có
                        những hành vi phù hợp đối với Khách hàng. Mọi hành vi lừa đảo, gian lận trong kinh
                        doanh, gây tổn hại đến người khác đều bị lên án và phải chịu hoàn toàn trách nhiệm trước
                        Pháp luật. Các bên bao gồm Khách hàng và Chủ xe sẽ phải có trách nhiệm tích cực trong
                        việc giải quyết khiếu nại. Chủ xe cần có trách nhiệm chủ động xử lý và cung cấp văn bản
                        giấy tờ chứng thực thông tin liên quan đến sự việc đang có khiếu nại, tranh chấp với
                        Khách hàng. Công ty chỉ đóng vai trò hỗ trợ, phối hợp việc thương lượng, hòa giải và
                        giải quyết khiếu nại giữ Khách hàng và Chủ xe. Công ty cũng có trách nhiệm cung cấp
                        những thông tin liên quan đến Khách hàng và Chủ xe nếu được Chủ xe hoặc Khách hàng hoặc
                        Cơ quan Pháp luật có thẩm quyền yêu cầu.</p>
                    <p>Sau khi Khách hàng và Chủ xe đã giải quyết xong tranh chấp, cần có trách nhiệm báo lại
                        cho Công ty để cập nhật tình hình. Trong trường hợp giao dịch phát sinh mâu thuẫn mà lỗi
                        thuộc về Chủ xe: Công ty sẽ áp dụng các biện pháp xử lý vi phạm tương ứng bao gồm nhưng
                        không giới hạn: cảnh cáo, khóa tài khoản hoặc chuyển cho Cơ quan Pháp luật có thẩm quyền
                        tùy theo mức độ của sai phạm. Công ty sẽ chấm dứt và gỡ bỏ toàn bộ tin bài về sản phẩm,
                        dịch vụ của Chủ xe đó trên Sàn giao dịch đồng thời yêu cầu Chủ xe bồi hoàn cho Khách
                        hàng thỏa đáng trên cơ sở thỏa thuận với Khách hàng.</p>
                    <div class="space l"></div>
                    <h4 id="">IV. Quy trình thanh toán</h4>
                    <h3 class="title">1. Quy trình thanh toán giữa khách hàng và chủ xe</h3>
                    <p>Chủ xe và khách hàng có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp
                        dụng phương thức phù hợp:</p>
                    <p>Cách 1: Thanh toán trực tiếp bằng tiền mặt</p>
                    <p>Bước 1: Khách hàng tìm hiểu thông tin về dịch vụ, loại xe muốn thuê, thời gian thuê, phí
                        dịch vụ trước khi tiến hành đặt xe;</p>
                    <p>Bước 2: Công ty sẽ kiểm tra, liên hệ, xác nhận thông tin đặt xe cuối cùng qua email, tin
                        nhắn điện thoại hoặc gọi điện thoại trực tiếp;</p>
                    <p>Bước 3: Khách hàng trực tiếp nộp tiền đặt cọc 30% phí thuê xe tại trụ sở Công ty, số 2
                        Hồng Hà, Phường 2, Quận Tân Bình, TPHCM.</p>
                    <p>Bước 4: Công ty gửi biên nhận điện tử qua email cho Khách hàng và Chủ xe xác nhận đã nhận
                        tiền cọc theo thỏa thuận thuê xe;</p>
                    <p>Bước 5: Khách hàng thanh toán phần còn lại cho Chủ xe bằng hình thức tiền mặt sau khi kết
                        thúc chuyến đi.</p>
                    <p>Cách 2: Thanh toán online qua thẻ tín dụng, chuyển khoản, tiền mặt</p>
                    <p>Bước 1: Khách hàng tìm hiểu thông tin về dịch vụ, loại xe muốn thuê, thời gian thuê, phí
                        dịch vụ trước khi tiến hành đặt xe;</p>
                    <p>Bước 2: Công ty sẽ kiểm tra, liên hệ, xác nhận thông tin đặt xe cuối cùng qua email, tin
                        nhắn điện thoại hoặc gọi điện thoại trực tiếp;</p>
                    <p>Bước 3: Khách hàng thanh toán đặt cọc 30% phí thuê xe cho Công ty bằng hình thức chuyển
                        khoản hoặc thẻ tín dụng của Khách hàng;</p>
                    <p>Bước 4: Công ty gửi biên nhận điện tử qua email cho Khách hàng và Chủ xe xác nhận đã nhận
                        tiền cọc theo thỏa thuận thuê xe;</p>
                    <p>Bước 5: Khách hàng thanh toán phần còn lại cho Chủ xe bằng hình thức chuyển khoản, thẻ
                        tín dụng sau khi kết thúc chuyến đi.</p>
                    <p>Cách 3: Thanh toán qua đơn vị thanh toán trung gian (Payoo, Momo, Zalo Pay…)</p>
                    <p>Bước 1: Khách hàng tìm hiểu thông tin về dịch vụ, loại xe muốn thuê, thời gian thuê, phí
                        dịch vụ trước khi tiến hành đặt xe;</p>
                    <p>Bước 2: Công ty sẽ kiểm tra, liên hệ, xác nhận thông tin đặt xe cuối cùng qua email, tin
                        nhắn điện thoại hoặc gọi điện thoại trực tiếp;</p>
                    <p>Bước 3: Khách hàng thanh toán đặt cọc 30% phí thuê xe qua Ví điện tử của Khách hàng tại
                        các trung gian thanh toán;</p>
                    <p>Bước 4: Công ty gửi biên nhận điện tử qua email cho Khách hàng và Chủ xe xác nhận đã nhận
                        tiền cọc theo thỏa thuận thuê xe;</p>
                    <p>Bước 5: Khách hàng thanh toán phần còn lại cho chủ xe qua Ví điện tử của Khách hàng tại
                        các trung gian thanh toán.</p>
                    <h3 class="title">2. Quy trình thanh toán giữa Chủ xe và Công ty</h3>
                    <p>Chủ xe thực hiện thanh toán phí quảng bá dịch vụ cho Công ty</p>
                    <p>Bước 1: Đăng kí xe cho thuê trên Sàn giao dịch TMĐT TravelMobile.vn</p>
                    <p>Bước 2: Xem xét và phê duyệt Yêu cầu thuê xe từ phía Khách hàng, theo đó Công ty sẽ tính
                        phí quảng bá dịch vụ theo % phí thuê xe được hiển thị trên Thông tin chuyến đi (xem lại
                        Mục 3 - Quy trình dành cho Khách hàng - Bước 4).</p>
                    <p>Bước 3: Định kì hàng tháng, Công ty sẽ tổng hợp phí Quảng bá dịch vụ cho các chuyến đi đã
                        thực hiện trong tháng, sau đó xuất hóa đơn cho chủ xe và Chủ xe thanh toán phí dich vụ
                        sàn theo các phương thức:</p>
                    <p>3a: Hình thức cấn trừ công nợ: Công ty sẽ cấn trừ tổng số tiền phí quảng bá dịch vụ thực
                        hiện trong tháng với tổng số tiền phí thuê xe Khách hàng thuê xe đã đặt đọc. Nếu Tổng số
                        tiền phí quảng bá dịch vụ lớn hơn Tổng số tiền phí thuê xe Khách hàng đã đặt cọc, Chủ xe
                        sẽ tiến hành thanh toán phần chênh lệch cho Công ty bằng hình thức chuyển khoản hoặc qua
                        đơn vị thanh toán trung gian.</p>
                    <p>3b: Chuyển khoản: Chủ xe chuyển khoản vào tài khoản ngân hàng của Công ty được niêm yết
                        trên website TravelMobile.vn.</p>
                    <p>3c: Thanh toán qua đơn vị thanh toán trung gian: Chủ xe thanh toán tiền qua Ví điện tử
                        của mình tại các đơn vị thanh toán trung gian cho Công ty.</p>
                    <p>Công ty trả tiền thu hộ từ Khách hàng cho Chủ xe</p>
                    <p>Bước 1: Khách hàng đặt cọc 30% phí thuê xe được hiển thị trên Thông tin chuyến đi. (xem
                        lại Mục 3 - Quy trình dành cho Khách hàng - Bước 4).</p>
                    <p>Bước 2: Công ty trả lại tiền thu hộ cho Chủ xe theo phương thức.</p>
                    <p>2a: Hình thức cấn trừ công nợ: Công ty sẽ cấn trừ tổng số tiền phí Quảng bá dịch vụ thực
                        hiện trong tháng với tổng số tiền phí thuê xe Khách hàng đã đặt đọc. Nếu tổng số tiền
                        phí thuê Khách hàng đã đặt cọc lớn hơn tổng số tiền phí quảng bá dịch vụ, Công ty sẽ
                        tiến hành thanh toán phần chênh lệch cho Chủ xe bằng hình thức chuyển khoản hoặc qua đơn
                        vị thanh toán trung gian.</p>
                    <p>2b: Chuyển khoản: Công ty chuyển khoản vào tài khoản ngân hàng của Chủ xe.</p>
                    <p>2c: Qua đơn vị thanh toán trung gian: Công ty chuyển tiền trên Ví điện tử của mình tại
                        các đơn vị thanh toán trung gian cho Chủ xe.</p>
                    <div class="space l"></div>
                    <h4>V. Đảm bảo an toàn giao dịch</h4>
                    <p>Công ty đã sử dụng các dịch vụ để bảo vệ thông tin về nội dung mà Chủ xe đã đăng về xe
                        cho thuê nhằm đảm bảo các giao dịch được tiến hành thành công, hạn chế tối đa rủi ro có
                        thể phát sinh.</p>
                    <p>Chủ xe phải cung cấp thông tin đầy đủ (tên, địa chỉ, số điện thoại, email) trong mỗi gian
                        hàng xe cho thuê.</p>
                    <p>Khách hàng và Chủ xe không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai
                        bằng email hoặc hình thức liên lạc khác, Công ty không chịu trách nhiệm về những thiệt
                        hại hay rủi ro mà Thành viên (Khách hàng và Chủ xe) có thể gánh chịu trong việc trao đổi
                        thông tin của Thành viên qua Internet hoặc email.</p>
                    <p>Trong trường hợp Khách hàng liên hệ trực tiếp với Chủ xe và không sử dụng dịch vụ của
                        Công ty thì Khách hàng phải cân nhắc cẩn thận việc giao tiền trước cho Chủ xe.</p>
                    <p>Thành viên tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để
                        can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán,
                        truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm hại hệ
                        thống của Công ty. Mọi vi phạm sẽ bị xử lý theo Quy chế và Quy định của Pháp luật.</p>
                    <p>Mọi thông tin giao dịch đều được bảo mật an toàn, trừ trường hợp buộc phải cung cấp khi
                        Cơ quan Pháp luật yêu cầu.</p>
                    <div class="space l"></div>
                    <h4 di="">VI. Bảo vệ thông tin cá nhân Khách hàng thuê xe</h4>
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
                    <h4 id="">VII. Quản lý thông tin xấu</h4>
                    <h3 class="title">1. Quy định đăng tin</h3>
                    <p>Thành viên của Sàn giao dịch TMĐT TravelMobile.vn sẽ tự chịu trách nhiệm về bảo mật và lưu giữ
                        mọi hoạt động sử dụng dịch vụ dưới tên đăng ký, mật khẩu của mình. Thành viên có trách
                        nhiệm thông báo kịp thời cho Công ty về những hành vi sử dụng trái phép, lạm dụng, vi
                        phạm bảo mật, lưu giữ tên đăng ký và mật khẩu của bên thứ ba để có biện pháp giải quyết
                        phù hợp.</p>
                    <p>Thành viên không sử dụng dịch vụ trên Sàn giao dịch vào những mục đích bất hợp pháp,
                        không hợp lý, lừa đảo, đe doạ, thăm dò thông tin bất hợp pháp, phá hoại, tạo ra và phát
                        tán virus gây hư hại tới hệ thống, cấu hình, truyền tải thông tin của Sàn giao dịch hay
                        sử dụng dịch vụ của mình vào mục đích đầu cơ, lũng đoạn thị trường tạo những đơn đặt
                        hàng, chào hàng giả, kể cả phục vụ cho việc phán đoán nhu cầu thị trường. Trong trường
                        hợp vi phạm thì Thành viên phải chịu trách nhiệm về các hành vi của mình trước Pháp
                        luật.</p>
                    <p>Thành viên không được thay đổi, chỉnh sửa, gán ghép, sao chép, truyền bá, phân phối, cung
                        cấp và tạo những công cụ tương tự của dịch vụ do Sàn giao dịch cung cấp cho một bên thứ
                        ba nếu không được sự đồng ý của Công ty trong bản Quy chế này.</p>
                    <p>Thành viên không được hành động gây mất uy tín của Sàn giao dịch dưới mọi hình thức như
                        gây mất đoàn kết giữa các Thành viên bằng cách sử dụng tên đăng ký thứ hai, thông qua
                        một bên thứ ba hoặc tuyên truyền, phổ biến những thông tin không có lợi cho uy tín của
                        Sàn giao dịch.</p>
                    <h3 class="title">2. Danh sách sản phẩm cấm giao dịch và giao dịch có điều kiện tại Sàn giao
                        dịch</h3>
                    <p>Danh sách sản phẩm cấm giao dịch</p>
                    <p>Rượu các loại; Thuốc lá điếu, xì gà và các dạng thuốc lá thành phẩm khác; Các loại pháo
                        nổ, thuốc pháo nổ; Các chất ma túy; Thiết bị gây nhiễu thông tin di động tế bào; Đèn
                        trời; Vũ khí quân dụng, trang thiết bị, kĩ thuật, khí tài, phương tiện chuyên dùng quân
                        sự, công an, quân trang; Đồ chơi nguy hiểm, đồ chơi có hại tới giáo dục nhân cách và sức
                        khỏe của trẻ em hoặc tới an ninh, trật tự, văn hóa xã hội (bao gồm cả các chương trình
                        trò chơi điện tử); Các sản phẩm văn hóa phản động, đồi trụy, mê tín dị đoan hoặc có hại
                        tới giáo dục thẩm mỹ, nhân cách; Di vật, cổ vật, bảo vật quốc gia thuộc di tích lịch sử
                        văn hóa và danh lam thắng cảnh, thuộc sở hữu toàn dân, sở hữu của các tổ chức chính trị,
                        tổ chức chính trị – xã hội; Hóa chất độc; tiền chất; Thuốc lá điếu, xì gà và các dạng
                        thuốc lá thành phẩm khác nhập lậu; Thực vật, động vật hoang dã; Thủy sản cấm khai thác,
                        thủy sản có dư lượng chất độc hại vượt quá giới hạn cho phép, thủy sản có yếu tố độc tự
                        nhiên gây nguy hiểm đến tính mạng con người; Các loại thuốc chữa bệnh cho người, các
                        loại vắc xin, sinh phẩm y tế, mỹ phẩm, hóa chất và chế phẩm diệt côn trùng, diệt khuẩn
                        trong lĩnh vực gia dụng và y tế chưa được sử dụng tại Việt Nam; Các loại trang thiết bị
                        y tế chưa được phép sử dụng tại Việt Nam; Các loại mỹ phẩm y tế chưa được công bố với cơ
                        quan có thẩm quyền; Mua bán các loại xe không có giấy tờ hay mất giấy tờ (chú ý khi mua
                        bán xe phải có bên thứ 3 chứng giấy tờ); Mua bán thông tin cá nhân (email, danh sách
                        khách hàng…);</p>
                    <p>Danh sách sản phẩm giao dịch có điều kiện</p>
                    <p>Đối với dụng cụ thể thao tập võ, Thành viên bán hàng phải là cửa hàng dụng cụ thể thao
                        hay cơ sở sản xuất dụng cụ thể thao;</p>
                    <p>Đối với các mặt hàng giới tính như bao cao su có thể bán như nhà thuốc, riêng sextoy,
                        kích dụng không được bán;</p>
                    <p>Đối với các mặt hàng phần mềm như account, software,… có bản quyền, phải do các công ty
                        có giấy phép kinh doanh rõ ràng cung cấp. Các cá nhân không được bán mặt hàng này;</p>
                    <h3 class="title">3. Hành vi cấm trong hoạt động đăng tải tin để giới thiệu, quảng cáo sản
                        phẩm, dịch vụ trên sàn giao dịch</h3>
                    <p>Quảng cáo thiếu thẩm mỹ, trái với truyền thống lịch sử, văn hóa, đạo đức, thuần phong mỹ
                        tục Việt Nam;</p>
                    <p>Quảng cáo xúc phạm uy tín, danh dự, nhân phẩm của tổ chức, cá nhân;</p>
                    <p>Quảng cáo có sử dụng hình ảnh, lời nói, chữ viết của cá nhân khi chưa được cá nhân đó
                        đồng ý, trừ trường hợp được pháp luật cho phép;</p>
                    <p>Quảng cáo không đúng hoặc gây nhầm lẫn về khả năng kinh doanh, khả năng cung cấp sản
                        phẩm, hàng hóa, dịch vụ của tổ chức, cá nhân kinh doanh sản phẩm, hàng hóa, dịch vụ; về
                        số lượng, chất lượng, giá, công dụng, kiểu dáng, bao bì, nhãn hiệu, xuất xứ, chủng loại,
                        phương thức phục vụ, thời hạn bảo hành của sản phẩm, hàng hoá, dịch vụ đã đăng ký hoặc
                        đã được công bố;</p>
                    <p>Quảng cáo bằng việc sử dụng phương pháp so sánh trực tiếp về giá cả, chất lượng, hiệu quả
                        sử dụng sản phẩm, hàng hóa, dịch vụ của mình với giá cả, chất lượng, hiệu quả sử dụng
                        sản phẩm, hàng hóa, dịch vụ cùng loại của tổ chức, cá nhân khác;</p>
                    <p>Quảng cáo có nội dung cạnh tranh không lành mạnh theo quy định của pháp luật về cạnh
                        tranh;</p>
                    <p>Quảng cáo vi phạm pháp luật về sở hữu trí tuệ;</p>
                    <h3 class="title">4. Cơ chế rà soát, kiểm soát thông tin đối với dịch vụ cho thuê xe đăng
                        tải trên Sàn giao dịch</h3>
                    <p>Các tin đăng về dịch vu cho thuê xe của Chủ xe sẽ được Công ty kiểm duyệt trước khi hiển
                        thị trên Sàn giao dịch.</p>
                    <p>Công ty sẽ toàn quyền loại bỏ các tin đăng của Chủ xe nếu như các tin đăng vi phạm Quy
                        chế đăng tin của Sàn giao dịch. Các tin đăng không phù hợp với chuyên mục quy định sẽ bị
                        xóa hoặc Công ty sẽ chủ động chuyển sang chuyên mục khác cho là hợp lý.</p>
                    <p>Công ty giữ quyền quyết định về việc lưu giữ hay loại bỏ tin đã đăng trên trang web này
                        mà không cần báo trước.</p>
                    <div class="space l"></div>
                    <h4 di="">VIII. Trách nhiệm trong trường hợp phát sinh lỗi kỹ thuật</h4>
                    <p>Công ty cam kết nỗ lực đảm bảo sự an toàn và ổn định của toàn bộ hệ thống kỹ thuật. Tuy
                        nhiên, trong trường hợp xảy ra sự cố do lỗi của Sàn giao dịch, Công ty sẽ ngay lập tức
                        áp dụng các biện pháp để đảm bảo quyền lợi cho Thành viên.</p>
                    <p>Khi thực hiện các giao dịch trên Sàn giao dịch, bắt buộc các thành viên phải thực hiện
                        đúng theo các quy trình hướng dẫn.</p>
                    <p>Công ty cam kết cung cấp chất lượng dịch vụ tốt nhất cho các Thành viên tham gia giao
                        dịch. Trường hợp phát sinh lỗi kỹ thuật, lỗi phần mềm hoặc các lỗi khách quan khác dẫn
                        đến việc Thành viên không thể tham gia giao dịch được thì các Thành viên thông báo cho
                        Công ty qua địa chỉ email: support@TravelMobile.vn hoặc gọi điện thoại đến số điện thoại 1900
                        9217; Công ty sẽ khắc phục lỗi trong thời gian sớm nhất, tạo điều kiện cho các Thành
                        viên tham gia hoạt động hiệu quả và an toàn trên Sàn giao dịch.</p>
                    <p>Tuy nhiên, Công ty sẽ không chịu trách nhiệm giải quyết trong trường hợp thông báo của
                        các Thành viên không đến được Ban Quản lí Sàn giao dịch, phát sinh từ lỗi kỹ thuật, lỗi
                        đường truyền, phần mềm hoặc các lỗi khác không do Công ty gây ra.</p>
                    <h4>IX. Quyền và nghĩa vụ của Ban quản lý Sàn giao dịch TMĐT TravelMobile.vn</h4>
                    <h3 class="title">1. Quyền của Ban Quản lí</h3>
                    <p>Ban Quản lí sẽ tiến hành cung cấp các dịch vụ cho những Thành viên tham gia sau khi đã
                        hoàn thành các thủ tục và các điều kiện bắt buộc mà Sàn giao dịch nêu ra.</p>
                    <p>Trong trường hợp có cơ sở để chứng minh Thành viên cung cấp thông tin cho Sàn giao dịch
                        không chính xác, sai lệch, không đầy đủ hoặc vi phạm pháp luật hay thuần phong mỹ tục
                        Việt Nam thì Ban Quản lí có quyền từ chối, tạm ngừng hoặc chấm dứt quyền sử dụng dịch vụ
                        của Thành viên.</p>
                    <p>Ban Quản lí có thể chấm dứt quyền thành viên và quyền sử dụng một hoặc tất cả các dịch vụ
                        của Thành viên và sẽ thông báo cho Thành viên trong thời hạn ít nhất là một (01) tháng
                        trong trường hợp Thành viên vi phạm các Quy chế của Sàn giao dịch hoặc có những hành vi
                        ảnh hưởng đến hoạt động kinh doanh trên Sàn giao dịch.</p>
                    <p>Ban Quản lí sẽ xem xét việc chấm dứt quyền sử dụng dịch vụ và quyền Thành viên của Thành
                        viên nếu Thành viên không tham gia hoạt động giao dịch và trao đổi thông tin trên Sàn
                        giao dịch liên tục trong ba (03) tháng. Nếu muốn tiếp tục trở Thành thành viên và được
                        cấp lại quyền sử dụng dịch vụ thì Thành viên phải đăng ký lại từ đầu theo thủ tục của
                        Sàn giao dịch.</p>
                    <p>Ban Quản lí có thể chấm dứt ngay quyền sử dụng dịch vụ và quyền Thành viên của Thành viên
                        nếu Ban Quản lí phát hiện Thành viên đã phá sản, bị kết án hoặc đang trong thời gian thụ
                        án, trong trường hợp Thành viên tiếp tục hoạt động có thể tạo ra trách nhiệm pháp lý
                        liên đới cho Công ty, có những hoạt động lừa đảo, giả mạo, gây rối loạn thị trường, gây
                        mất đoàn kết đối với các Thành viên khác của Sàn giao dịch, hoạt động vi phạm Pháp luật
                        hiện hành của Việt Nam. Trong trường hợp chấm dứt quyền Thành viên và quyền sử dụng dịch
                        vụ thì tất cả các chứng nhận, các quyền của Thành viên được cấp sẽ mặc nhiên hết giá trị
                        và bị chấm dứt.</p>
                    <p>Ban Quản lí giữ bản quyền sử dụng dịch vụ và các nội dung trên Sàn giao dịch theo các quy
                        định Pháp luật về Bảo hộ sở hữu trí tuệ tại Việt Nam. Tất cả các biểu tượng, nội dung
                        theo các ngôn ngữ khác nhau đều thuộc quyền sở hữu của Công ty. Nghiêm cấm mọi hành vi
                        sao chép, sử dụng và phổ biến bất hợp pháp các quyền sở hữu trên.</p>
                    <p>Ban Quản lí giữ quyền được thay đổi biểu giá dịch vụ và phương thức thanh toán trong thời
                        gian cung cấp dịch vụ cho Thành viên theo nhu cầu và điều kiện khả năng của Ban Quản lí
                        và sẽ báo trước cho Thành viên thời hạn là một (01) tháng.</p>
                    <h3 class="title">2. Nghĩa vụ và trách nhiệm của Ban quản lý</h3>
                    <p>Ban Quản lí có trách nhiệm xây dựng, thực hiện cơ chế kiểm tra, giám sát để đảm bảo việc
                        cung cấp thông tin của Thành viên trên Sàn giao dịch được thực hiện chính xác đầy đủ
                        theo quy định tại Khoản 4 Điều 36 Nghị định 52/2013/NĐ-CP; Ban Quản lí sẽ nỗ lực tối đa
                        và nghiêm túc loại bỏ những thông tin không trung thực hoặc hàng hóa giả như sau:</p>
                    <p>Loại bỏ những thông tin bán hàng hóa, dịch vụ thuộc danh mục hàng hóa, dịch vụ cấm kinh
                        doanh và hàng hóa hạn chế kinh doanh theo quy định của pháp luật;</p>
                    <p>Loại bỏ những thông tin bán hàng giả, hàng nhái, hàng nhập lậu, hàng vi phạm quyền sở hữu
                        trí tuệ;</p>
                    <p>Yêu cầu các Thành viên khi cung cấp các hàng hóa, dịch vụ thuộc danh mục hàng hóa, dịch
                        vụ kinh doanh có điều kiện phải cung cấp giấy chứng nhận đủ điều kiện kinh doanh đối với
                        hàng hóa, dịch vụ đó. Ban Quản lí chịu trách nhiệm xây dựng Sàn giao dịch, bao gồm một
                        số công việc chính như: nghiên cứu, thiết kế, mua sắm các thiết bị phần cứng và phần
                        mềm, kết nối Internet, xây dựng chính sách phục vụ cho hoạt động của Sàn giao dịch trong
                        điều kiện và phạm vi cho phép. Ban Quản lí sẽ tiến hành triển khai và hợp tác với các
                        đối tác trong việc xây dựng hệ thống các dịch vụ, các công cụ tiện ích phục vụ cho việc
                        giao dịch của các Thành viên tham gia hoạt động trên Sàn giao dịch; Thông báo đến Thành
                        viên các điều khoản, điều kiện áp dụng của dịch vụ cung cấp trên Sàn giao dịch và các
                        quyền lợi của Thành viên khi tham gia hoạt động trên Sàn giao dịch;</p>
                    <p>Ban Quản lí có trách nhiệm đứng ra làm trung gian trong việc hòa giải nếu xảy ra tranh
                        chấp giữa Khách hàng và Chủ xe. Ban Quản lí sẽ tiếp nhận thông tin phản ảnh, khiếu nại
                        từ Khách hàng và kiểm tra nội dung phản ánh, khiếu nại đó. Nếu xét thấy những phản ánh
                        đó là đúng, Ban Quản lí sẽ yêu cầu Chủ xe phải giải trình về nhũng thông tin đó. Tùy
                        theo mức độ sai phạm, Ban Quản lí sẽ có phương án giải quyết yêu cầu Chủ xe đền bù cho
                        Khách hàng, sẽ khóa tài khoàn Thành viên của Chủ xe; Ban Quản lí có nhiệm vụ hỗ trợ Cơ
                        quan quản lý Nhà nước điều tra các hành vi kinh doanh vi phạm Pháp luật, cung cấp thông
                        tin đăng ký, lịch sử giao dịch và các tài liệu khác về đối tượng có hành vi vi phạm pháp
                        luật trên Sàn giao dịch; Ban Quản lí chịu trách nhiệm xây dựng, bổ sung hệ thống các
                        kiến thức, thông tin về: nghiệp vụ ngoại thương, thương mại điện tử, hệ thống văn bản
                        pháp luật thương mại trong nước và quốc tế, thị trường nước ngoài, cũng như các tin tức
                        có liên quan đến hoạt động của Sàn giao dịch; Ban Quản lí sẽ tiến hành các hoạt động xúc
                        tiến, quảng bá Sàn giao dịch ra thị trường nước ngoài trong phạm vi và điều kiện cho
                        phép, góp phần mở rộng, kết nối đáp ứng các nhu cầu tìm kiếm bạn hàng và phát triển thị
                        trường nước ngoài của các Thành viên tham gia Sàn giao dịch; Ban Quản lí sẽ cố gắng đến
                        mức cao nhất trong phạm vi và điều kiện có thể để duy trì hoạt động bình thường của Sàn
                        giao dịch và khắc phục các sự cố như: sự cố kỹ thuật về máy móc, lỗi phần mềm, hệ thống
                        đường truyền internet, nhân sự, các biến động xã hội, thiên tai, mất điện, các quyết
                        định của Cơ quan Nhà nước hay một tổ chức liên quan thứ ba. Tuy nhiên, nếu những sự cố
                        trên xảy ra nằm ngoài khả năng kiểm soát, là những trường hợp bất khả kháng gây thiệt
                        hại cho Thành viên thì Ban Quản lí không phải chịu trách nhiệm liên đới.</p>
                    <p>Lưu trữ thông tin đăng ký của các thương nhân, tổ chức, cá nhân tham gia sàn giao dịch
                        thương mại điện tử và thường xuyên cập nhật những thông tin thay đổi, bổ sung có liên
                        quan. Áp dụng các biện pháp cần thiết để đảm bảo an toàn thông tin liên quan đến bí mật
                        kinh doanh của thương nhân, tổ chức, cá nhân và thông tin cá nhân của Thành viên. Có
                        biện pháp xử lý kịp thời khi phát hiện hoặc nhận được phản ánh về hành vi kinh doanh vi
                        phạm pháp luật trên sàn giao dịch thương mại điện tử. Hỗ trợ Cơ quan Quản lý nhà nước
                        điều tra các hành vi kinh doanh vi phạm pháp luật, cung cấp thông tin đăng ký, lịch sử
                        giao dịch và các tài liệu khác về đối tượng có hành vi vi phạm pháp luật trên sàn giao
                        dịch thương mại điện tử.</p>
                    <p>Công bố công khai cơ chế giải quyết các tranh chấp phát sinh trong quá trình giao dịch
                        trên Sàn giao dịch. Khi Thành viên trên Sàn giao dịch phát sinh mâu thuẫn với nhau (giữa
                        Khách hàng và Chủ xe hoặc ngược lại) hoặc bị tổn hại lợi ích hợp pháp, sẽ cung cấp cho
                        Thành viên thông tin về Khách hàng/Chủ xe, tích cực hỗ trợ Thành viên bảo vệ quyền và
                        lợi ích hợp pháp của mình.</p>
                    <p>Yêu cầu thương nhân, tổ chức, cá nhân trên Sàn giao dịch cung cấp các thông tin theo quy
                        định:</p>
                    <p>Tên và địa chỉ trụ sở của thương nhân, tổ chức hoặc tên và địa chỉ thường trú của cá
                        nhân; Số, ngày cấp và nơi cấp giấy chứng nhận đăng ký kinh doanh của thương nhân, hoặc
                        số, ngày cấp và đơn vị cấp quyết định thành lập của tổ chức, hoặc mã số thuế cá nhân của
                        cá nhân; Số điện thoại hoặc một phương thức liên hệ trực tuyến khác;</p>
                    <p>Ngăn chặn và loại bỏ khỏi website những thông tin bán hàng hóa, dịch vụ thuộc danh mục
                        hàng hóa, dịch vụ cấm kinh doanh theo quy định của Pháp luật và hàng hóa hạn chế kinh
                        doanh như:</p>
                    <p>Súng săn và đạn súng săn, vũ khí thể thao, công cụ hỗ trợ; Thuốc lá điếu, xì gà và các
                        dạng thuốc lá thành phẩm khác; Rượu các loại; Thực vật, động vật hoang dã quý hiếm, bao
                        gồm cả vật sống và các bộ phận của chúng đã được chế biến; Các hàng hóa hạn chế kinh
                        doanh khác theo quy định của pháp luật.</p>
                    <p>Loại bỏ khỏi website những thông tin bán hàng giả, hàng nhái, hàng nhập lậu, hàng vi phạm
                        quyền sở hữu trí tuệ và các hàng hóa, dịch vụ vi phạm pháp luật khác khi phát hiện hoặc
                        nhận được phản ánh có căn cứ xác thực về những thông tin này.</p>
                    <div class="space l"></div>
                    <h4>X. Quyền và trách nhiệm chủ xe (người bán) tham gia sàn giao dịch</h4>
                    <h3 class="title">1. Quyền của chủ xe (người bán) tham gia sàn giao dịch</h3>
                    <p>- Khi đăng ký trở thành Thành viên Chủ xe của TravelMobile và được Ban Quản lí đồng ý, Chủ xe sẽ
                        được mua bán dịch vụ tại Sàn giao dịch.</p>
                    <p>- Chủ xe sẽ được cấp tên đăng ký và mật khẩu riêng để sử dụng trong việc quản lý những
                        giao dịch tại Sàn giao dịch và đăng bán dịch vụ của mình trên Sàn giao dịch.</p>
                    <p>- Chủ xe sẽ được Ban Quản lí hướng dẫn sử dụng được các công cụ, các tính năng phục vụ
                        cho việc đăng tin rao vặt và sử dụng các dịch vụ tiện ích trên Sàn giao dịch.</p>
                    <p>- Chủ xe có quyền đóng góp ý kiến cho Ban Quản lí trong quá trình hoạt động. Các kiến
                        nghị được gửi trực tiếp bằng thư, fax hoặc email đến cho Ban Quản lí.</p>
                    <h3 class="title">2. Nghĩa vụ của chủ xe (người bán) tham gia sàn giao dịch</h3>
                    <p>- Chủ xe phải cung cấp đầy đủ và chính xác các thông tin bao gồm tên và địa chỉ trụ sở
                        của thương nhân, tổ chức hoặc tên và địa chỉ thường trú của cá nhân; số, ngày cấp và nơi
                        cấp giấy chứng nhận đăng ký kinh doanh của thương nhân, hoặc số, ngày cấp và đơn vị cấp
                        quyết định thành lập của tổ chức, hoặc mã số thuế cá nhân của cá nhân; số điện thoại
                        hoặc một phương thức liên hệ trực tuyến khác.</p>
                    <p>- Chủ xe sẽ tự chịu trách nhiệm về việc bảo mật và lưu giữ mọi hoạt động sử dụng dịch vụ
                        dưới tên đăng ký, mật khẩu và hộp thư điện tử của mình. Chủ xe có trách nhiệm thông báo
                        kịp thời cho Ban Quản lí về những hành vi sử dụng trái phép, lạm dụng, vi phạm bảo mật,
                        lưu giữ tên đăng ký và mật khẩu của mình để hai bên cùng hợp tác xử lý.</p>
                    <p>- Chủ xe tự chịu trách nhiệm về nội dung, hình ảnh của doanh nghiệp và các thông tin khác
                        cũng như bản quyền nội dung, hình ảnh, quá trình giao dịch với các đối tác trên Sàn giao
                        dịch và chịu trách nhiệm về tính chính xác, trung thực của thông tin về sản phẩm/dịch vụ
                        được trao đổi mua bán trên Sàn giao dịch.</p>
                    <p>- Chủ xe phải cung cấp thông tin về tình hình kinh doanh của mình khi có yêu cầu của Cơ
                        quan Nhà nước có thẩm quyền để phục vụ hoạt động thống kê thương mại điện tử.</p>
                    <p>- Chủ xe phải tuân thủ quy định của Pháp luật về thanh toán, quảng cáo, khuyến mại, bảo
                        vệ quyền sở hữu trí tuệ, và các quy định của Pháp luật có liên quan khác khi tham gia
                        Sàn giao dịch.</p>
                    <p>- Chủ xe có trách nhiệm cung cấp thông tin về giao dịch, hỗ trợ Sàn giao dịch trong việc
                        giải quyết tranh chấp phát sinh giữa các thành viên diễn ra thông qua Sàn giao dịch.</p>
                    <p>- Chủ xe có trách nhiệm bồi thường thiệt hại cho các thành viên khác nếu có bằng chứng
                        chứng minh được lỗi đó thuộc về Chủ xe đã gây ra thiệt hại.</p>
                    <p>- Chủ xe cam kết, đồng ý không sử dụng dịch vụ của Sàn giao dịch vào những mục đích bất
                        hợp pháp, không hợp lý, lừa đảo, đe doạ, thăm rò thông tin bất hợp pháp, phá hoại, tạo
                        ra và phát tán virus gây hư hại tới hệ thống, cấu hình, truyền tải thông tin của Sàn
                        giao dịch hay sử dụng dịch vụ của mình vào mục đích đầu cơ, lũng đoạn thị trường tạo
                        những đơn đặt hàng, chào hàng giả, kể cả phục vụ cho việc phán đoán nhu cầu thị trường.
                        Trong trường hợp vi phạm thì Chủ xe phải chịu trách nhiệm về các hành vi của mình trước
                        Pháp luật.</p>
                    <p>- Chủ xe cam kết không được thay đổi, chỉnh sửa, sao chép, truyền bá, phân phối, cung cấp
                        và tạo những công cụ tương tự của dịch vụ do Sàn giao dịch cung cấp cho một bên thứ ba
                        nếu không được sự đồng ý của Ban Quản lí.</p>
                    <p>- Chủ xe cần có trách nhiệm với việc giao tiếp riêng và chịu trách nhiệm với kết quả của
                        việc đăng tải. Chủ xe không được phép làm nhưng điều như: đăng tải những nội dung được
                        đăng ký bản quyền nếu Chủ xe không phải là người chủ bản quyền hoặc không được người chủ
                        bản quyền cho phép đăng tải nó; đăng tải nội dung tiết lộ những bí mật thương mại nếu
                        Chủ xe không làm chủ hoặc không được phép của người chủ; đăng tải những nội dung vi phạm
                        bất cứ quyền sở hữu trí tuệ nào khác của người khác hoặc xâm phạm bảo mật hay quyền công
                        cộng của người khác; đăng tải những nội dung tục tĩu, làm mất danh dự, đe dọa, quấy rầy,
                        sỉ nhục, căm ghét hay gây cản trở cho người sử dụng khác hay bất cứ người nào khác hay
                        tổ chức nào khác; đăng tải những thông tin không có chủ đề hay có chủ đề đặc biệt; đăng
                        tải một hình ảnh hay nội dung sex; đăng tải những mẫu quảng cáo hay xúi giục kinh doanh
                        hay đăng tải nội dung chứa virus, Trojan, bom thời gian… hay những quy trình hay chương
                        trình máy tính khác với mục đích hủy diệt, gây cản trở bất lợi, ngăn chặn lừa dối hay
                        chiếm đoạt bất cứ hệ thống, dữ liệu hay thông tin nào.</p>
                    <p>- Chủ xe không được hành động gây mất uy tín của Sàn giao dịch dưới mọi hình thức như gây
                        mất đoàn kết giữa các Chủ xe bằng cách sử dụng tên đăng ký thứ hai, thông qua một bên
                        thứ ba hoặc tuyên truyền, phổ biến những thông tin không có lợi cho uy tín của Sàn giao
                        dịch.</p>
                    <p>- Chủ xe đảm bảo tính trung thực, chính xác các thông tin về hàng hóa/dịch vụ của mình
                        đăng trên Sàn Giao Dịch TMĐT TravelMobile.vn</p>
                    <p>- Chủ xe cập nhật các thông tin thay đổi về hàng hóa/dịch vụ đã đăng tải trên Sàn Giao
                        Dịch TMĐT TravelMobile.vn</p>
                    <p>- Chủ xe chịu trách nhiệm về chất lượng hàng hóa, dịch vụ cung cấp cho Khách hàng.</p>
                    <p>- Chủ xe chịu trách nhiệm giải quyết khiếu nại và bồi thường thiệt hại cho Khách hàng
                        (nếu có).</p>
                    <p>- Chủ xe thanh toán phí dịch vụ quảng cáo và đăng tin cho Sàn Giao Dịch TMĐT TravelMobile.vn.
                    </p>
                    <p>- Chủ xe thông báo hoặc đăng ký với cơ quan nhà nước có thẩm quyền các Chương trình
                        khuyến mại hàng hóa/dịch vụ (nếu có).</p>
                    <p>- Chủ xe cung cấp đầy đủ thông tin về chủ sở hữu gian hàng và hàng hóa, dịch vụ (nếu có)
                        theo quy định từ Điều 29 đến Điều 34 Nghị định 52/2013/NĐ-CP về Thương mại điện tử khi
                        bán hàng hóa hoặc cung ứng dịch vụ trên Sàn Giao Dịch TMĐT TravelMobile.vn</p>
                    <p>- Chủ xe cung cấp thông tin về tình hình kinh doanh của mình khi có yêu cầu của cơ quan
                        nhà nước có thẩm quyền để phục vụ hoạt động thống kê thương mại điện tử.</p>
                    <p>- Chủ xe tuân thủ quy định của pháp luật về thanh toán, quảng cáo, khuyến mại, bảo vệ
                        quyền sở hữu trí tuệ, bảo vệ quyền lợi người tiêu dùng và các quy định của pháp luật có
                        liên quan khác khi bán hàng hóa hoặc cung ứng dịch vụ trên sàn giao dịch thương mại điện
                        tử.</p>
                    <p>- Chủ xe hoàn toàn chịu trách nhiệm trước pháp luật trong trường hợp hàng hóa, dịch vụ do
                        người bán hàng đăng tải trên Sàn Giao Dịch TMĐT TravelMobile.vn thuộc danh mục hàng hóa cấm
                        quảng cáo, cấm kinh doanh hoặc/và vi phạm các quy định khác của pháp luật.</p>
                    <p>- Chủ xe hoàn toàn chịu trách nhiệm trước Khách hàng trong trường hợp hàng hóa, dịch vụ
                        không đạt chất lượng như thông tin người bán đã đăng tải trên Sàn Giao Dịch TravelMobile.vn.
                    </p>
                    <div class="space l"></div>
                    <h4>XI. Quyền và trách nhiệm khách hàng (người mua) tham gia sàn giao dịch</h4>
                    <h3 class="title">1. Quyền của Khách hàng (người mua) tham gia sàn giao dịch</h3>
                    <p>- Khi đăng ký trở thành Thành viên của TravelMobile và được Ban Quản lí đồng ý, Khách hàng sẽ
                        được mua bán dịch vụ tại Sàn giao dịch.</p>
                    <p>- Khách hàng sẽ được cấp tên đăng ký và mật khẩu riêng để sử dụng trong việc quản lý
                        những giao dịch tại Sàn giao dịch.</p>
                    <p>- Khách hàng sẽ được Ban Quản lí hướng dẫn sử dụng được các công cụ, các tính năng phục
                        vụ cho việc sử dụng các dịch vụ tiện ích trên Sàn giao dịch.</p>
                    <p>- Khách hàng có quyền đóng góp ý kiến cho Ban Quản lí trong quá trình hoạt động. Các kiến
                        nghị được gửi trực tiếp bằng thư, fax hoặc email đến cho Ban Quản lí.</p>
                    <div class="space l"></div>
                    <h3 class="title">2. Nghĩa vụ của khách hàng (người mua) tham gia sàn giao dịch</h3>
                    <p>- Khách hàng có trách nhiệm cung cấp các thông tin cần thiết liên quan đến bản thân để
                        đảm bảo hoàn thành đơn hàng bao gồm: tên giao dịch, địa chỉ, phương thức thanh toán lựa
                        chọn, điện thoại liên hệ.</p>
                    <p>- Khách hàng sẽ tự chịu trách nhiệm về việc bảo mật và lưu giữ mọi hoạt động sử dụng dịch
                        vụ dưới tên đăng ký, mật khẩu và hộp thư điện tử của mình. Khách hàng có trách nhiệm
                        thông báo kịp thời cho Ban Quản lí về những hành vi sử dụng trái phép, lạm dụng, vi phạm
                        bảo mật, lưu giữ tên đăng ký và mật khẩu của mình để hai bên cùng hợp tác xử lý.</p>
                    <p>- Khách hàng tự chịu trách nhiệm về nội dung, hình ảnh của Doanh nghiệp và các thông tin
                        khác cũng như bản quyền nội dung, hình ảnh, quá trình giao dịch với các đối tác trên Sàn
                        giao dịch.</p>
                    <p>- Khách hàng có trách nhiệm cung cấp thông tin về giao dịch, hỗ trợ Sàn giao dịch trong
                        việc giải quyết tranh chấp phát sinh giữa các thành viên diễn ra thông qua Sàn giao
                        dịch.</p>
                    <p>- Khách hàng có trách nhiệm bồi thường thiệt hại cho Thành viên khác nếu có bằng chứng
                        chứng minh được lỗi đó thuộc về Khách hàng đã gây ra thiệt hại.</p>
                    <p>- Khách hàng cam kết không được thay đổi, chỉnh sửa, sao chép, truyền bá, phân phối, cung
                        cấp và tạo những công cụ tương tự của dịch vụ do Sàn giao dịch cung cấp cho một bên thứ
                        ba nếu không được sự đồng ý của Ban Quản lí.</p>
                    <p>- Khách hàng không được hành động gây mất uy tín của Sàn giao dịch dưới mọi hình thức như
                        gây mất đoàn kết giữa các Thành viên bằng cách sử dụng tên đăng ký thứ hai, thông qua
                        một bên thứ ba hoặc tuyên truyền, phổ biến những thông tin không có lợi cho uy tín của
                        Sàn giao dịch.</p>
                    <p>- Khách hàng chịu trách nhiệm bảo mật tên đăng ký, mật khẩu và hộp thư điện tử dùng để
                        đăng ký trên Sàn Giao Dịch TMĐT TravelMobile.vn</p>
                    <p>- Khách hàng cam kết những thông tin cung cấp cho Sàn Giao Dịch TMĐT TravelMobile.vn là đầy đủ
                        và chính xác. Nếu thành viên phát hiện bất cứ bên thứ ba nào có hành vi sử dụng trái
                        phép, lạm dụng tên đăng ký và mật khẩu của mình trên Sàn Giao Dịch TMĐT TravelMobile.vn thì
                        Khách hàng có trách nhiệm thông báo kịp thời cho Sàn Giao Dịch TMĐT TravelMobile.vn để có biện
                        pháp giải quyết phù hợp.</p>
                    <p>- Khách hàng không được sử dụng dịch vụ của Sàn Giao Dịch TMĐT TravelMobile.vn vào mục đích lừa
                        đảo, de dọa, thăm dò thông tin bất hợp pháp, phá hoại, tạo ra và phát tán virut gây hư
                        hại tới hệ thống máy chủ, website Sàn Giao Dịch TMĐT TravelMobile.vn. Thành viên nào vi phạm sẽ
                        phải chịu hoàn toàn trách nhiệm trước pháp luật.</p>
                    <div class="space l"></div>
                    <h4>XII. Điều khoản áp dụng</h4>
                    <p>Quy chế quản lý hoạt động của Sàn giao dịch TMĐT TravelMobile.vn chính thức có hiệu lực thi hành
                        kể từ ngày ký Quyết định ban hành kèm theo Quy chế này và được đăng tải công khai trên
                        website TravelMobile.vn (bao gồm trên Ứng dụng gọi xe TravelMobile). Công ty Cổ phần TravelMobile
                        Việt Nam có
                        quyền điều chỉnh và thay đổi Quy chế này phù hợp với quá trình hoạt động thực tế bằng
                        cách thông báo công khai lên Sàn giao dịch cho các Thành viên biết. Quy chế sửa đổi có
                        hiệu lực kể từ ngày có thông báo thay đổi hoặc quyết định về việc sửa đổi Quy chế có
                        hiệu lực. Việc Thành viên tiếp tục sử dụng dịch vụ trên Sàn giao dịch sau khi Quy chế
                        sửa đổi được công bố và thực thi đồng nghĩa với việc Thành viên đã đọc, hiểu và chấp
                        nhận Quy chế sửa đổi này.</p>
                    <p>Quy chế hoạt động sẽ được Công ty cập nhật và bổ sung liên tục mà không cần thông báo
                        trước. Thành viên tham gia Sàn giao dịch có trách nhiệm tuân theo Quy chế hiện hành khi
                        hoạt động trên Sàn giao dịch.</p>
                    <h4>XIII. Điều khoản cam kết</h4>
                    <p>
                    <p>Mọi Thành viên khi sử dụng website TravelMobile.vn của Sàn giao dịch TMĐT TravelMobile.vn để thực
                        hiện
                        giao dịch mua bán trực tuyến thì đồng nghĩa việc các bên có liên quan đã đọc, hiểu và
                        chấp thuận tuân theo Quy chế này.</p>
                    <p>Mọi thắc mắc của Thành viên xin vui lòng liên hệ với Công ty Cổ phần TravelMobile Việt Nam theo
                        thông tin dưới đây để được giải đáp:</p>
                    <p>Phòng dịch vụ khách hàng</p>
                    <p>Công ty Cổ phần TravelMobile Việt Nam</p>
                    <p>Địa chỉ: 2 Hồng Hà, Phường 2, Quận Tân Bình, TPHCM.</p>
                    <p>Số điện thoại: 1900 9217</p>
                    <p>Email: support@TravelMobile.vn</p>
                    </p>
                    <div class="space l"></div>
                    <div class="space l"></div>
                    <div style="float: right;">
                        <div style="text-align: center;">
                            <h3 class="title">Giám đốc</h3>
                            <h3 class="title">TRƯƠNG VĂN KHÁNH</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
