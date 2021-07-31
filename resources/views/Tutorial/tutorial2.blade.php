@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Hướng dẫn')

@section('bodycode')
    <section class="body">
        <div class="payment-guide__sect">
            <div class="m-container">
                <h3 class="n-title">Hướng Dẫn Đặt Xe</h3>

                <div class="link-step-by-step"><a class="text-primary" href="tutorial2#loginTravelMobile">1. Đăng nhập hoặc
                        đăng ký
                        tài
                        khoản</a><a class="text-primary" href="tutorial2#searchCars">2.
                        Tìm kiếm xe</a><a class="text-primary" href="tutorial2#useFilter">3. Sử dụng bộ lọc để tìm kiếm xe
                        mong
                        muốn</a><a class="text-primary" href="tutorial2#sendRequest">4.
                        Lựa chọn xe mong muốn và gửi yêu cầu thuê xe</a><a class="text-primary" href="tutorial2#deposit">5.
                        Thanh toán đặt cọc</a></div>
                <div class="payment-guide-content">
                    <p>Bạn có thể đặt xe trực tuyến qua website TravelMobile.vn hoặc ứng dụng TravelMobile thông qua các
                        bước
                        đặt xe cơ bản</p>
                    <p>Vui lòng tham khảo thông tin chi tiết về từng bước tìm kiếm và đặt xe như sau:</p>
                </div>
                <div class="payment-guide-detail">
                    <div class="content-guide">
                        <div class="method-item" id="loginTravelMobile">
                            <h4 class="method-name">1. Đăng nhập hoặc đăng ký tài khoản</h4>
                            <p>Bạn vui lòng đăng nhập bằng tài khoản đã có ở TravelMobile hoặc đăng nhập thông qua
                                Facebook/Google. Trong trường hợp chưa đăng ký tài khoản, bạn có thể chọn dòng
                                "Đăng kí ngay" để tạo tài khoản tại TravelMobile.vn</p>
                            <p>Sau khi đã hoàn tất, bạn có thể bấm vào chữ "Tạo tài khoản" để hoàn tất quá trình
                            </p>
                            
                        </div>
                        <div class="method-item" id="searchCars">
                            <h4 class="method-name">2. Tìm kiếm xe</h4>
                            <p>Bạn có thể tìm xe theo cách sau:</p>
                            <p class="method-title">Tìm theo địa chỉ bạn nhập ở thanh tìm kiếm</p>
                            

                        </div>
                        <div class="method-item" id="useFilter">
                            <h4 class="method-name">3. Sử dụng bộ lọc để tìm kiếm xe mong muốn</h4>
                            <p> <span class="fontWeight-5">a. Sắp xếp: </span>Hệ thống đang mặc định sắp xếp các
                                xe theo chế độ tối ưu. Bạn có thể lựa chọn sắp xếp xe theo giá thấp đến giá cao,
                                khoảng cách gần nhất hoặc các xe có điểm đánh giá cao nhất.</p>
                            <p> <span class="fontWeight-5">b. Mức giá: </span>Hệ thống đang mặc định thể hiện xe
                                tại mọi mức giá khác nhau. Bạn có thể thu gọn danh sách các xe nằm trong vùng
                                giá mong muốn bằng cách di chuyển thanh mức giá.</p>
                            <p> <span class="fontWeight-5">c. Loại xe: </span>Hệ thống đang mặc định hiển thị
                                tất cá xe 4 chỗ và 7 chỗ. Bạn có thể lựa chọn chỉ xem riêng danh sách xe 4 chỗ
                                hoặc danh sách xe 7 chỗ bằng cách bấm vào ô tương ứng.</p>
                            <p> <span class="fontWeight-5">d. Hãng xe:</span> Hệ thống đang mặc định hiển thị
                                tất cả xe của các hãng khác nhau. bạn có thể lựa chọn chỉ xem riêng danh sách xe
                                của một hãng yêu thích bằng cách bấm vào tên của hãng xe. </p>
                            <div class="box-classify d-flex">
                                <div class="center">
                                    <h4 class="ls-title">WEB </h4><img class="img-fluid" src="">
                                </div>

                            </div>
                            <p> <span class="fontWeight-5">Nâng cao: </span>Thể hiện các tính năng tìm kiếm nâng
                                cao (số ghế ngồi trên xe, năm sản xuất, các xe đang ở chế độ cho phép "Giao xe
                                tận nhà", hoặc cho phép "Đặt xe nhanh" (không cần chủ xe phê duyệt), truyền động
                                (số sàn hay số tự động), loại nhiên liệu(xe máy dầu hay máy xăng) và nhiều điều
                                kiện lọc nâng cao khác...) để dễ dàng tìm đúng dòng xe bạn mong muốn.</p>
                            
                        </div>
                        <div class="method-item" id="sendRequest">
                            <h4 class="method-name">4. Lựa chọn xe mong muốn và gửi yêu cầu thuê xe</h4>
                            <p><strong>a. Kiểm tra thông tin xe:</strong> Hình ảnh xe, số chuyến đi đã thực
                                hiện, đánh giá của các khách thuê, mô tả xe và các tính năng liên quan.</p>
                            
                                
                            
                            <p> <strong>b. Kiểm tra vị trí xe:</strong> Hệ thống sẽ khoanh vùng tọa độ trên bản
                                đồ. Địa chỉ xe chính xác sẽ được hiển thị sau khi khách hàng tiến hành thanh
                                toán đặt cọc.</p>
                            
                            <p> <strong>c. Kiểm tra yêu cầu giấy tờ thuê xe và xem thông tin chủ xe:</strong>
                            </p>
                            <div class="content-detail">
                                <p>1. Các giấy tờ bắt buộc: Để đảm bảo an toàn, các chủ xe cần khách thuê cung
                                    cấp CMND bản gốc, Bằng lái xe ô tô bản gốc, Hộ khẩu hoặc Sổ tạm trú (KT3)
                                    bản gốc tại TPHCM (nếu thuê xe tại Hà Nội/ Đà Nẵng/ Đà Lạt thì cần HK/KT3
                                    tại cùng địa phương).</p>
                                <p>2. Điều khoản các yêu cầu thuê xe khác: Chính sách riêng của chủ xe về các
                                    giấy tờ thay thế trong trường hợp khách thuê không có HK/KT3 (có thể thay
                                    thế bằng passport, GPKD công ty, hoặc nhờ người thân có HK đứng tên hợp
                                    đồng), tài sản đặt cọc khi thuê xe (xe máy hoặc tiền mặt có giá trị tương
                                    đương).</p>
                                <ul class="list-method">
                                    <li class="text-primary">Khách thuê lưu ý khi giao nhận xe, các chủ xe sẽ
                                        giữ lại HK/KT3 bản gốc + tài sản đặt cọc và sẽ hoàn trả lại sau khi bạn
                                        hoàn trả lại xe như nguyên trạng ban đầu.</li>
                                    <li class="text-primary">Bên cạnh đó, bạn vui lòng kiểm tra kĩ phần giấy tờ
                                        yêu cầu của chủ xe để đảm bảo đủ điều kiện thuê xe, hạn chế các trường
                                        hợp hủy chuyến sau khi đã đặt cọc vì không đáp ứng đủ giấy tờ.</li>
                                    <li class="text-primary">Trường hợp bạn không có đầy đủ các giấy tờ yêu cầu,
                                        vui lòng ghi rõ trong mục lời nhắn gửi đến chủ xe hoặc liên hệ bộ phận
                                        CSKH của TravelMobile tại <u> 19009217 </u> để được linh hoạt hỗ trợ tìm kiếm
                                        các xe phù hợp.</li>
                                </ul>
                                <p>3. Thông tin chủ xe: Mục này sẽ thể hiện điểm đánh giá dành cho chủ xe, nhận
                                    xét của khách thuê và thời gian phản hồi của chủ xe đối với các yêu cầu thuê
                                    xe...</p>
                                <p>Bạn có thể ưu tiên chọn các chủ xe có điểm đánh giá cao, thời gian phản hồi
                                    nhanh chóng và có nhiều nhận xét tích cực từ khách thuê. </p>
                            </div>
                            
                            <p class="fontWeight-5">d. Kiểm tra giá, thời gian thuê, lựa chọn địa điểm giao nhận
                                xe, thông tin giới hạn quãng đường/ngày:</p>
                            <div class="content-detail">
                                <p>1. Thời gian thuê</p>
                                <p>- Thời gian thuê xe được tính theo ngày, hệ thống mặc định thời gian nhận xe
                                    từ 21h hôm nay và trả xe vào 20h hôm sau.</p>
                                <p>- Bạn có thể linh hoạt tùy chỉnh thời gian nhận và trả xe. Nếu tổng thời gian
                                    dưới 24h sẽ làm tròn là 1 ngày. Theo thông lệ, đa phần các chủ xe trên TravelMobile
                                    chỉ giao xe từ 5h sáng - 10h tối hàng ngày nên bạn cần điều chỉnh thời gian
                                    cho phù hợp để dễ dàng thuê xe bạn nhé. </p>
                                <p>2. Địa điểm giao nhận xe</p>
                                <p>Bạn có thể lựa chọn 1 trong 2 hình thức giao nhận xe:</p>
                                <p>- Giao nhận tại địa điểm của chủ xe: Địa chỉ nhận xe sẽ được hiển thị chính
                                    xác sau khi bạn tiến hành thanh toán đặt cọc thành công trên hệ thống.</p>
                                <p>- Giao nhận tận nơi: Bạn có thể yêu cầu chủ xe giao đến địa chỉ nhà của mình
                                    và sẽ thanh toán thêm phí giao nhận xe (hệ thống sẽ tự động xác định khoảng
                                    cách từ vị trí chủ xe đến địa điểm giao xe để tính phí giao nhận xe).</p>
                                <p>3. Giới hạn quãng đường</p>
                                <p>Nếu cần di chuyển xa, bạn cần kiểm tra kĩ số km được phép di chuyển tối đa
                                    trong một ngày và số tiền phụ phí/km nếu vượt giới hạn. Mỗi chủ xe sẽ có các
                                    yêu cầu khác nhau về giới hạn quãng đường di chuyển và phụ phí.</p>
                            </div>
                            
                            
                            <p class="fontWeight-5">e. Kiểm tra lại yêu cầu thuê xe:</p>
                            <div class="content-detail">
                                <p>Bạn cần kiểm tra lại toàn bộ các thông tin trong yêu cầu thuê xe (thông tin
                                    xe, thời gian thuê, địa điểm nhận xe, khuyến mãi, tổng tiền thuê, các giấy
                                    tờ bắt buộc và yêu cầu khác).</p>
                                <p>Bạn có thể gửi lời nhắn đến chủ xe tại mục "Lời nhắn" để giới thiệu về lộ
                                    trình di chuyển, các giấy tờ bạn có hoặc các yêu cầu khác liên quan đến việc
                                    thuê xe... để chủ xe ra quyết định cho thuê nhanh chóng và admin TravelMobile dễ
                                    dàng hỗ trợ bạn hơn nhé.</p>
                                <p>Cuối cùng, bạn gửi yêu cầu thuê xe đến chủ xe bằng cách nhấn vào phím "Đặt
                                    xe". Các chủ xe sẽ nhận được yêu cầu đặt xe từ bạn và sẽ phản hồi đến bạn
                                    (Đồng ý/ Từ chối cho thuê) trong thời gian sớm nhất.</p>
                                <p class="text-danger"><u>Lưu ý:</u> Để hỗ trợ bạn đặt xe nhanh hơn, hệ thống
                                    cho phép bạn gửi một lúc nhiều yêu cầu thuê xe đến nhiều chủ xe khác nhau và
                                    bạn có thể ưu tiên lựa chọn các chủ xe có phản hồi sớm bạn nhé.</p>
                            </div>
                            
                        </div>
                        <div class="method-item" id="deposit">
                            <h4 class="method-name">5. Thanh toán đặt cọc</h4>
                            <div class="content-detail payment-guide-content">
                                <p>Sau khi nhận được phản hồi đồng ý từ chủ xe (qua cả 2 hình thức: tin nhắn sms
                                    + thông báo trên website/ứng dụng), bạn vui lòng tiến hành thanh toán đặt
                                    cọc 30% tiền thuê xe trong thời gian sớm nhất để hoặc tất quá trình đặt xe
                                    (phần tiền 70% còn lại bạn sẽ thanh toán trực tiếp cho chủ xe khi nhận xe).
                                </p>
                                <p>Các hình thức đặt cọc tại TravelMobile:</p>
                                <ul class="list-method">
                                    <li><a href="tutorial4#visaMethod" target="_blank">Thanh
                                            toán
                                            qua thẻ tín dụng/thẻ ghi nợ VISA,
                                            Master</a></li>
                                    <li><a href="tutorial4#atmMethod" target="_blank">Thanh
                                            toán qua
                                            thẻ ATM đã đăng kí thanh toán trực
                                            tuyến</a></li>
                                    <li><a href="tutorial4#storeMethod" target="_blank">Thanh
                                            toán
                                            tiền mặt tại cửa hàng tiện lợi gần nhà
                                            (có chấp nhận thanh toán qua Payoo)</a></li>
                                    <li><a href="tutorial4#transferMethod"
                                            target="_blank">Thanh
                                            toán bằng hình thức chuyển khoản ngân hàng</a>
                                    </li>
                                    <li><a href="tutorial4#officeMethod"
                                            target="_blank">Thanh toán
                                            bằng tiền mặt tại văn phòng TravelMobile</a>
                                    </li>
                                </ul>
                                <p>Để được hướng dẫn rõ hơn, bạn vui lòng vào trang <a class="text-primary fontWeight-5"
                                        href="tutorial4" target="_blank">Hướng dẫn thanh
                                        toán </a> nhé.</p>
                                <p>Sau khi thanh toán đặt cọc thành công, bạn sẽ nhận số điện thoại và địa chỉ
                                    chính xác của chủ xe. Bạn vui lòng liên hệ sớm với chủ xe để xác nhận lại
                                    lần nữa về lịch trình và các giấy tờ yêu cầu để đảm bảo chuyến đi của mình
                                    được diễn ra suôn sẽ và tốt đẹp. 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
