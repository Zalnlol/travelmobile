@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'Tutorial')

@section('bodycode')
    <section class="body">
        <div class="payment-guide__sect">
            <div class="m-container">
                <h3 class="n-title">Hướng Dẫn Dành Cho Chủ Xe</h3>
                <div class="link-step-by-step"><a class="text-primary" href="tutorial3#regisCar">A.
                        Hướng dẫn Đăng ký xe</a><a class="text-primary" href="tutorial3#manageCar">B.
                        Hướng dẫn Quản
                        lý xe</a><a class="text-primary" href="tutorial3#requestTrip">C.
                        Hướng dẫn Duyệt Xe / Từ Chối</a><a class="text-primary" href="tutorial3#cancelTrip">D. Hướng dẫn Hủy
                        chuyến</a></div>
                <div class="payment-guide-detail">
                    <div class="content-guide">
                        <p>Bạn có thể dễ dàng đăng ký và quản lý xe cho thuê trên hệ thống TravelMobile qua website
                            TravelMobile.vn hoặc ứng dụng TravelMobile. Chi tiết các bước như sau:</p>
                        <div class="method-item" id="regisCar">
                            <h4 class="method-name">A. Hướng dẫn Đăng ký xe</h4>
                            <h4 class="method-name">1. Đăng nhập hoặc đăng ký tài khoản</h4>
                            <div class="pl-2">
                                <p>Bạn vui lòng đăng nhập bằng tài khoản đã có ở TravelMobile hoặc đăng nhập thông qua
                                    Facebook/Google. Trong trường hợp chưa đăng ký tài khoản, bạn có thể chọn
                                    dòng "Đăng ký ngay" để tạo tài khoản tại TravelMobile</p>
                                <p>Sau khi đã hoàn tất, bạn có thể bấm vào chữ "Tạo tài khoản" để hoàn tất quá
                                    trình</p>
                                
                            </div>
                        </div>
                        <div class="method-item">
                            <h4 class="method-name">2. Đăng ký xe</h4>
                            <div class="pl-2">
                                <p>Sau khi đã tạo tài khoản, chọn biểu tượng tài khoản của bạn, chọn mục "Xe của
                                    tôi" → chọn "Đăng ký xe" để bắt đầu đăng xe</p>
                                
                                <p>Tại mục "Đăng ký xe", bạn vui lòng điền đầy đủ các trường thông tin (từ 5-10p
                                    dành cho mục này)</p>
                                <p><strong>BƯỚC 1: Thông tin xe</strong></p>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Biển số xe:</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Vui lòng điền chính xác biển số xe của bạn (ví dụ: 51G-1234). Trường
                                            hợp biển số xe bị trùng vì đã có người sử dụng, bạn vui lòng gọi<a
                                                class="text-primary" href="tel:19009217"> 19009217 (9AM - 6PM
                                                T2-T7)</a> để thông báo với admin.</p>
                                        <div class="box-classify d-flex">
                                            <div class="center">
                                                <h4 class="ls-title">WEB</h4><img class="img-fluid" src="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <p><strong>Thông tin cơ bản:</strong></p>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title pl-2">
                                        <p>Loại xe</p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Hiện tại TravelMobile chỉ cho thuê các dòng xe 4-7 chỗ.</p>
                                    </div>
                                    <div class="box-item-title pl-2">
                                        <p>Hãng xe - Mẫu xe - Số ghế</p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Lựa chọn dòng xe có trong danh sách. Trường hợp thông tin xe của bạn
                                            không có trong danh sách, vui lòng gọi <a class="text-primary"
                                                href="tel:19009217"> 19009217 (9AM - 6PM T2-T7)</a> để thông báo
                                            với admin.</p>
                                    </div>
                                    <div class="box-item-title pl-2">
                                        <p>Năm sản xuất</p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>TravelMobile không giới hạn năm sản xuất của xe, chỉ cần bạn đảm bảo xe vẫn
                                            trong tình trạng tốt và an toàn cho khách thuê.</p>
                                    </div>
                                    <div class="box-item-title pl-2">
                                        <p>Truyền động</p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Lựa chọn Số sàn / Số tự động.</p>
                                    </div>
                                    <div class="box-item-title pl-2">
                                        <p>Nhiên liệu</p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Chọn thông tin Xăng / Dầu.</p>
                                    </div>
                                </div>
                                
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Mức tiêu thụ nhiên liệu/100km</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Khách thuê sẽ ưu tiên lựa chọn các xe tiết kiệm nhiên liệu cho các
                                            chuyến đi dài ngày.</p>
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Mô tả xe</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Bạn có thể viết vài dòng để giới thiệu về xe của mình. Bạn có thể
                                            tham khảo các mô tả của các chủ xe đang cho thuê trên TravelMobile</p>
                                        <div class="ctn-desc">
                                            <p>Mô tả của chủ xe Thắng Nguyễn cho xe Huynhdai Elentra 2018</p>
                                            <p>Hyundai Elantra 1.6AT-2018 số tự động đăng ký tháng 11/2018. Xe
                                                mới, sạch sẽ, an toàn, rộng rãi, tiện nghi, phù hợp cho gia đình
                                                du lịch.</p>
                                            <p>Xe được trang bị hệ thống cảm biến lùi, cảm biến gạt mưa tự động,
                                                cảm biến đèn pha tự động, camera cập lề, camera hành trình, hệ
                                                thống cảnh báo vượt tốc độ tích hợp trên màn hình DVD cảm ứng
                                                dẫn đường GPS, hệ thống giải trí AV cùng nhiều tiện nghi khác.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Tính năng:</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Lựa chọn các tính năng tương ứng với xe của bạn (Cửa sổ trời,
                                            Bluetooth, Định vị GPS, Khe cắm USB, Ghế trẻ em)</p>
                                        
                                    </div>
                                </div>
                                <p><strong>BƯỚC 2: Thiết lập yêu cầu cho thuê</strong></p>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Đơn giá thuê</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p><strong>Bạn muốn cho thuê giá bao nhiêu?</strong></p>
                                        <p>Bạn có thể tham khảo mức giá các chủ xe đang cho thuê trên hệ thống
                                            để cái đặt giá thuê cho xe của mình.</p>
                                        <p>Giá càng cạnh tranh sẽ càng thu hút khách hàng thuê xe. Hệ thống cũng
                                            sẽ ưu tiên xếp hạng các xe có giá cạnh tranh ở thứ hạng cao hơn khi
                                            khách hàng tìm kiếm xe.</p>
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Giảm giá</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p><strong>Bạn có muốn giảm giá cho các đơn hàng cho thuê dài
                                                ngày?</strong></p>
                                        <p>Bạn có thể cài đặt mức giảm giá cho các yêu cầu thuê xe dài ngày
                                            (tuần/tháng).</p>
                                        <p>Hiện tại, mức giảm giá phổ biến của các chủ xe TravelMobile từ 5% cho thuê
                                            tuần và 10% cho thuê tháng.</p>
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Đặt xe nhanh</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p><strong>Bạn có muốn kiểm tra thông tin khách hàng và xác nhận lại
                                                lịch cho thuê xe trước khi duyệt xe?</strong></p>
                                        <p>Thông thường, sau khi khách thuê gửi yêu cầu thuê xe, chủ xe sẽ tiến
                                            hành kiểm tra thông tin khách hàng, xác nhận lại lịch trình và tiến
                                            hành phê duyệt (đồng ý/từ chối) yêu cầu thuê xe trên ứng dụng.</p>
                                        <p>Tuy nhiên, một số chủ xe không thường xuyên online/ít kiểm tra điện
                                            thoại, để có thể tiết kiệm thời gian thì có thể cài đặt chế độ đồng
                                            ý tự động với tính năng "Đặt xe nhanh". Tính năng này cho phép chủ
                                            xe mặc định "Đồng ý" với tất cả các yêu cầu thuê xe rơi vào các ngày
                                            xe còn trống lịch mà chủ xe đã cài đặt trước đó.</p>
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Địa chỉ xe</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p><strong>Địa chỉ xe của bạn ở đâu?</strong></p>
                                        <p>Nhập vị trí xe của bạn (số nhà - đường - Quận - Thành phố) và kiểm
                                            tra lại vị trí xe hiển thị trên bản đồ.</p>
                                        <p>Lưu ý, vị trí này cũng chính là địa chỉ khách hàng sẽ đến nhận và trả
                                            xe.</p>
                                        
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Giao xe tận nơi</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>
                                            <strong>Bạn có thể giao xe đến địa chỉ của khách hàng không ?
                                            </strong>
                                        </p>
                                        <p>Tính năng này dành cho các chủ xe có thể giao xe tận nơi cho khách
                                            thuê.</p>
                                        <p>Bạn cần cài đặt phạm vi mình có thể giao xe cũng như thiết lập phí
                                            giao và nhận xe 2 chiều.</p>
                                        <p>Phạm vi giao xe mặc định trên hệ thống là 20km và phí giao nhận 2
                                            chiều là 10,000vnd/km</p>
                                        
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Giới hạn quãng đường</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p><strong>Bạn có yêu cầu giới hạn quãng đường tối đa / ngày đối với
                                                khách thuê?</strong></p>
                                        <p>Tính năng này cho phép chủ xe quy định giới hạn số km xe được sử dụng
                                            tối đa trong 1 ngày.</p>
                                        <p>Giới hạn quãng đường mặc định trên hệ thống là 400km và phí vượt giới
                                            hạn là 5,000vnd/km</p>
                                        
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>Điều khoản thuê xe</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Bên cạnh việc quy định giấy tờ thuê xe (bản gốc) bao gồm CMND, GPLX,
                                            Hộ khẩu/KT3 (yêu cầu mặc định đối với tất cả chủ xe trên TravelMobile), các
                                            chủ xe có thể quy định thêm một số điều khoản khác liên quan đến thủ
                                            tục cho thuê, điều này sẽ hạn chế các tranh chấp xảy ra trong trường
                                            hợp xảy ra sự cố:</p>
                                        <p>- Có chấp nhận hộ khẩu tỉnh? Có chấp nhận thay thế HK/KT3 bằng các
                                            giấy tờ khác (Passport?)</p>
                                        <p>- Quy định phí vệ sinh xe nếu xe bị bẩn khi hoàn trả</p>
                                        <p>- Cấm hút thuốc? Chở các thực phẩm có mùi? Mức phí nếu xảy ra vi
                                            phạm.</p>
                                        <p>- Phí rửa xe nếu xe bị bẩn?</p>
                                        <p>- Giới hạn thời gian nhận xe ngày tết/ngày lễ</p>
                                        <p>- Các điều khoản khác nếu có</p>
                                        
                                    </div>
                                </div>
                                <div class="box-classify d-flex">
                                    <div class="box-item-title">
                                        <p><strong>BƯỚC 3: Hình ảnh</strong></p>
                                    </div>
                                    <div class="box-item-content">
                                        <p>Đăng tải các hình ảnh xe của bạn để giới thiệu với khách thuê. TravelMobile
                                            đề xuất bạn nên chụp từ 5-10 hình ở nhiều góc độ khác nhau (bên
                                            ngoài, nội thất) và hình ảnh chụp nên sắc nét, rõ ràng để thu hút
                                            khách thuê</p>
                                        <p>Bấm "Chọn hình" → chọn hình ảnh xe của bạn → bấm "Đăng hình". Bạn làm
                                            tuần tự nhiều lần để cập nhật nhiều hình ảnh xe lên hệ thống.</p>
                                        <p>Bấm "Đăng ký" để hoàn tất quá trình đăng ký</p>
                                        <p>Sau khi bấm đăng ký bạn sẽ nhận được thông báo yêu cầu đăng ký xe của
                                            bạn đã được gửi đến Admin TravelMobile.</p>
                                        <p>Nếu xe của bạn đáp ứng đầy đủ các yêu cầu cho thuê, Admin TravelMobile sẽ
                                            tiến hành phê duyệt xe của bạn trong vòng 1-3 ngày làm việc.</p>
                                        <p>Nếu bạn là chủ xe mới và lần đầu đăng xe lên TravelMobile, sẽ có nhân viên
                                            phát triển đối tác của TravelMobile liên hệ với bạn để xác minh thông tin
                                            và tư vấn kĩ các thủ tục cho thuê trên ứng dụng trước khi phê duyệt
                                            yêu cầu đăng xe của bạn.</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="method-item" id="manageCar">
                            <h4 class="method-name">B. Hướng dẫn Quản lý xe</h4>
                            <div class="pl-2">
                                <p>Sau khi Admin đã phê duyệt yêu cầu đăng ký xe, bạn sẽ nhận được thông báo qua
                                    ứng dụng TravelMobile.</p>
                                <p>Trước khi bắt đầu cho thuê, bạn cần tiến hành cài đặt 2 thông tin quan trọng:
                                </p>
                                <p><strong>Cài đặt lịch cho thuê xe </strong></p>
                                <div class="pl-2">
                                    <div class="box-classify d-flex">
                                        <div class="box-item-title">
                                            <p><strong>Trên website</strong></p>
                                        </div>
                                        <div class="box-item-content">
                                            <p>Chọn "Xe của tôi" → "Danh sách xe" → "Quản lý xe"</p>
                                            <div class="box-classify d-flex">
                                                <img class="img-fluid" src="">
                                            </div>
                                        </div>
                                    </div>
                                    <p><strong>Trong mục "Quản lý xe", chọn "Cài đặt lịch":</strong></p>
                                    <div class="box-classify d-flex">
                                        <div class="box-item-title">
                                            <p><strong>Lịch xe</strong></p>
                                        </div>
                                        <div class="box-item-content">
                                            <p>Tính năng lịch xe là một trong những tính năng rất quan trọng cho
                                                phép bạn linh hoạt chỉnh lịch xe bận theo ngày, bạn cần hiểu rõ
                                                và thường xuyên cập nhật lịch xe bận để đảm bảo khách thuê sẽ
                                                đặt xe vào các ngày xe bạn còn trống.</p>
                                            <p>Giả sử bạn đã có kế hoạch sử dụng xe vào ngày 22/02 và ngày 25/02
                                                tới, để cập nhật lịch bận cho 2 ngày này, bạn chọn "Thiết lập
                                                lịch bận".</p>
                                            <p>Tại phần lịch xe, bạn chọn các ngày 22/02 và 25/02, hệ thống sẽ
                                                tự động tô đen các ngày bạn chọn báo hiệu xe đã bận và khách
                                                thuê sẽ không thể gửi yêu cầu thuê xe cho các ngày này.</p>
                                            <p>Để gỡ lịch bận, bạn làm tương tự bước vừa rồi.</p>
                                            
                                        </div>
                                    </div>
                                    <div class="box-classify d-flex">
                                        <div class="box-item-title">
                                            <p><strong>Thiết lập thời gian cho thuê</strong></p>
                                        </div>
                                        <div class="box-item-content">
                                            <p>Hiện tại, thời gian cho thuê mặc định trên hệ thống từ hiện tại -
                                                3 tháng tới, có nghĩa rằng khách thuê chỉ có thể thuê xe của bạn
                                                vào các ngày bất kì trong vòng 3 tháng tới.</p>
                                            <p>Bạn có thể thay đổi thời gian cho thuê tại các mốc khác bằng cách
                                                chọn mục "Cho đến" và lựa chọn mốc thời gian mong muốn.</p>
                                            <p>Tính năng này thường được sử dụng khi các chủ xe chỉ chắc chắn về
                                                lịch trình trong thời gian ngắn khoảng 1-2 tháng sắp tới.</p>
                                            
                                        </div>
                                    </div>
                                </div>

                                <p><strong>Cài đặt giá cho thuê </strong></p>
                                <div class="pl-2">
                                    <div class="box-classify d-flex">
                                        <div class="box-item-title">
                                            <p><strong>Cài đặt giá chung tất cả các ngày</strong></p>
                                        </div>
                                        <div class="box-item-content">
                                            <p>Trong mục "Quản lý xe", chọn "Cài đặt giá". Bước này thực ra ban
                                                đầu bạn đã thực hiện khi tiến hành đăng xe, tuy nhiên bạn vẫn có
                                                thể điều chỉnh lại giá cho thuê nếu muốn, bao gồm giá chung tất
                                                cả các ngày, giảm giá thuê tuần, giảm giá thuê tháng.</p>
                                        </div>
                                    </div>
                                    <div class="box-classify d-flex">
                                        <div class="box-item-title">
                                            <p><strong>Cài đặt giá cho thuê theo ngày</strong></p>
                                        </div>
                                        <div class="box-item-content">
                                            <p>Trường hợp bạn muốn thay đổi mức giá cho thuê khác nhau theo
                                                ngày, bạn có thể sử dụng tính năng này.</p>
                                            <p>Trong mục "Quản lý xe" → chọn "Cài đặt lịch" → tại phần lịch xe,
                                                chọn "Tùy chỉnh giá" → chọn ngày và điều chỉnh giá thuê bạn mong
                                                muốn.</p>
                                            <p>Tính năng này thường được sử dụng để điều chỉnh giá vào các dịp
                                                lễ tết, giá thuê +30-40% so với ngày thường, hoặc điều chỉnh giá
                                                dịp cuối tuần +10-20%.</p>
                                            
                                            <p>Trường hợp bạn muốn lặp lại hoặc cố định giá cho thuê ngày cuối
                                                tuần mặc định cao hơn ngày thường, ví dụ +10%, bạn có thể thao
                                                tác nhanh bằng cách chọn biểu tượng kế bên "Tùy chỉnh giá", tiếp
                                                theo bạn nhập giá cho 2 ngày thứ 7 và chủ nhật, sau đó bấm "Xác
                                                nhận".</p>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="method-item" id="requestTrip">
                            <h4 class="method-name">C. Hướng dẫn Duyệt Xe/ Từ Chối</h4>

                            <div class="pl-2">
                                <p>Khi có khách hàng gửi yêu cầu thuê xe, bạn sẽ nhận được thông báo qua ứng
                                    dụng và tin nhắn sms qua điện thoại.</p>
                                <p>Bạn vui lòng truy cập vào ứng dụng TravelMobile, chọn mục "Thông báo", chọn "Yêu cầu
                                    thuê xe" để dẫn đến trang "Chi tiết cho thuê" và tiến hành phản hồi bằng
                                    cách bấm "Đồng ý" hoặc "Từ chối".</p>
                                <p>Tại trang "Chi tiết cho thuê", bạn cần kiểm tra kỹ thời gian đặt xe, đơn giá
                                    trước khi tiến hành phê duyệt.</p>
                                <p>Để xem thông tin khách thuê, bạn bấm vào tên khách thuê để dẫn đến trang Hồ
                                    sơ, tại đây bạn có thể xem các đánh giá từ các chủ xe khác dành cho khách
                                    thuê (trường hợp khách thuê đã từng có chuyến đi trên TravelMobile)</p>
                                <p class="text-danger">Lưu ý *: Tỉ lệ phản hồi (% phản hồi / tổng lượt yêu cầu
                                    thuê xe), Thời gian phản hồi, Tỉ lệ đồng ý sẽ tác động đến kết quả xếp hạng
                                    xe của bạn trên ứng dụng, qua đó ảnh hưởng trực tiếp đến xác xuất khách hàng
                                    đặt xe, vì thế các chủ xe cần chủ động cập nhật lịch bận, và thường xuyên
                                    phản hồi yêu cầu thuê xe của khách trong thời gian sớm nhất.</p>


                                <p>Sau khi chủ xe phản hồi, khách thuê sẽ nhận được thông báo qua ứng dụng và
                                    tin nhắn sms qua điện thoại. Trường hợp chủ xe đồng ý cho thuê, khách thuê
                                    sẽ tiến hành thực hiện đặt cọc để hoàn tất quá trình thuê xe.</p>
                                <p class="text-danger">"Lưu ý **: Sau khi chủ xe đồng ý cho thuê, trong thời
                                    gian khách thuê tiến hành đặt cọc, chủ xe có quyền đồng ý đối với các yêu
                                    cầu thuê xe khác trên TravelMobile, hệ thống sẽ ưu tiên các khách hàng nào đặt cọc
                                    sớm nhất.</p>
                                <p class="text-danger">Trường hợp chủ xe nhận các yêu cầu thuê xe khác ngoài hệ
                                    thống, chủ xe cần lưu ý cập nhật lịch bận ngay trên hệ thống trước khi khách
                                    hàng tiến hành đặt cọc."</p>
                                <p>Chủ xe và khách thuê sẽ nhận được thông tin số điện thoại để có thể trực tiếp
                                    trao đổi, xác minh giấy tờ và lịch trình thuê xe sau khi khách thuê thực
                                    hiện đặt cọc thành công.</p>
                                <p class="text-danger">"Lưu ý ***: Các chủ xe và khách thuê cần chủ động liên hệ
                                    nhau để xác minh các thủ tục thuê, trường hợp có vấn đề phát sinh hoặc thay
                                    đổi kế hoạch cho thuê cần thực hiện hủy chuyến trong vòng 1 tiếng kể từ thời
                                    điểm đặt cọc để không bị tính phí hủy chuyến.</p>
                                <p class="text-danger">Các trường hợp hủy chuyến ngoài khoảng thời gian 1 tiếng
                                    sau khi đặt cọc sẽ áp dụng việc tính phí theo <span class="fontWeight-5">"Chính sách hủy
                                        chuyến"</span> đã chính thức được
                                    áp dụng và đăng ký trên webiste của TravelMobile <a class="text-danger fontWeight-5"
                                        href="PolicieRegulation#canceltrip" style="color: rgb(252, 74, 74);"> tại
                                        đây</a>."</p>
                            </div>
                        </div>
                        <div class="method-item" id="cancelTrip">
                            <h4 class="method-name">D. Hướng dẫn hủy chuyến</h4>
                            <p><strong>Hủy chuyến trước khi khách hàng đặt cọc:</strong></p>
                            <p>Trường hợp này xảy ra khi các chủ xe thay đổi kế hoạch cho thuê, có nhầm lẫn
                                trong việc kiểm tra lịch bận xe nên tiến hành đồng ý cho thuê và sau đó thực
                                hiện hủy chuyến, hoặc chủ xe đã nhận khách thuê khác trong thời gian chờ đợi
                                khách hàng đặt cọc.</p>
                            <p>Để thực hiện hủy chuyến, chủ xe truy cập vào ứng dụng TravelMobile, chọn mục "Thông báo"
                                → chọn "Sắp tới" → lựa chọn chuyến đi muốn hủy để dẫn đến trang "Chi tiết cho
                                thuê" → bấm "Hủy chuyến".</p>
                            <p><strong>Hủy chuyến sau khi khách hàng đã đặt cọc:</strong></p>
                            <p>Trường hợp này xảy ra có thể vì các lý do từ phía chủ xe chẳng hạn như xe bị sự
                                cố hoặc từ phía khách thuê chẳng hạn như khách không có đầy đủ giấy tờ yêu cầu.
                                Để hủy chuyến, chủ xe cần thực hiện các bước sau:</p>
                            <div class="pl-2">
                                <p>1. Chủ xe vui lòng gọi điện thông báo và trao đổi với khách thuê về việc hủy
                                    chuyến để khách thuê có thể chủ động sắp xếp công việc và thay đổi lịch
                                    trình di chuyển kịp thời.</p>
                                <p>2. Thực hiện hủy chuyến trên hệ thống: Chủ xe truy cập vào ứng dụng TravelMobile,
                                    chọn mục "Thông báo" → chọn "Sắp tới" → lựa chọn chuyến đi muốn hủy để dẫn
                                    đến trang "Chi tiết cho thuê" → bấm "Hủy chuyến". Tại trang hủy chuyến, bạn
                                    vui lòng lựa chọn "Lý do hủy chuyến" và giải thích rõ lý do hủy trong phần
                                    nội dung, sau đó bấm hủy chuyến. Việc ghi rõ lý do hủy chuyến sẽ giúp admin
                                    xác định rõ lý do hủy chuyến thuộc về chủ xe hay khách thuê để có ghi nhận
                                    phù hợp trong việc xử lí các chuyến đi bị hủy, tính toán chính xác doanh số
                                    cho chủ xe</p>
                                <p>Ngay khi chủ xe thực hiện hủy chuyến, hệ thống sẽ gửi thông báo đến khách
                                    thuê về việc chủ xe hủy chuyến cũng như lý do và lời nhắn chủ xe gửi đến
                                    khách thuê."</p>
                            </div>
                            <p>Theo<a class="text-primary fontWeight-5" href="PolicieRegulation#canceltrip">
                                    "Chính sách hủy chuyến"</a>
                                đã công bố trong Quy chế hoạt động trên website TravelMobile.vn việc chủ xe hủy chuyến
                                sau khi khách hàng đã đặt cọc có thể dẫn đến việc phát sinh <span
                                    class="text-primary fontWeight-5"> Phí hủy chuyến</span> và ảnh hưởng đến
                                điểm đánh giá của chủ xe trên hệ thống TravelMobile, vì thế các chủ xe cần cân nhắc và
                                kiểm tra kĩ trước khi thực hiện hủy chuyến.</p>
                            




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
