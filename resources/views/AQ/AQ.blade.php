@extends('layoutUser.layoutstaticpage')
@section('titleweb', 'question - answer')

@section('bodycode')

    <section class="body">
        {{-- <div class="faqs-search__sect" style="background-image: url(&quot;/static/media/bg-faqs.6f940224.jpg&quot;);"></div> --}}
        <div class="body-container">
            <div class="faqs__sect">
                <div class="sidebar full-size">
                    <div class="sidebar_content">
                        <br>
                        <br>
                        <br>
                        <br>
                        <ul>
                            <li><a class="active" href="AQ#owner">Dành cho chủ xe</a>
                            </li>
                            <li><a class="" href="AQ#traveler">Dành cho khách thuê</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <div class="content-faqs">
                        <h3 id="owner">DÀNH CHO CHỦ XE</h3>
                        <div class="list-faq__wrap">
                            <div class="faqs-box">
                                <h6>A. Đăng xe</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/huongdanchung">1.
                                                Hướng dẫn chung</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/thutuc">2.
                                                Thủ tục cho thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/datxenhanh">3.
                                                Tính năng đặt xe nhanh</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/giaonhanxe">4.
                                                Giao nhận xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/thongtinxe">5.
                                                Thông tin xe đăng kí</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/phivanhanh">6.
                                                Phí vận hành</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>B. Quản lý xe trên TravelMobile</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/lichban">1.
                                                Quản lí lịch bận</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/dyctx">2.
                                                Duyệt yêu cầu thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/ttdcx">3.
                                                Thanh toán đặt cọc xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/rtqvmi">4.
                                                Rút tiền qua ví TravelMobile</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>C. Giao và nhận xe</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/gttttx">1.
                                                Giấy tờ, thủ tục thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/dgscd">2.
                                                Đánh giá sau chuyến đi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>D. Thay đổi lịch trình - hủy chuyến</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/cxhc">1.
                                                Chủ xe hủy chuyến</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/khc">2.
                                                Khách hủy chuyến</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>E. Quản lý rủi ro</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/xlsc">1.
                                                Xử lí sự cố</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/gbhcd">2.
                                                Gói bảo hiểm chuyến đi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>F. Câu hỏi khác</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/owner/xhxtud">1.
                                                Xếp hạng xe trên ứng dụng</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/tngps">2.
                                                Tính năng GPS</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/dvtxctx">3.
                                                Dịch vụ thuê xe có tài xế</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/ctgtcxm">4.
                                                Chương trình giới thiệu chủ xe mới</a></li>
                                        <li class="item"><a class="subhead" href="AQ/owner/tphd">5.
                                                Thành phố hoạt động</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="content-faqs">
                        <h3 id="traveler">DÀNH CHO KHÁCH THUÊ</h3>
                        <div class="list-faq__wrap">
                            <div class="faqs-box">
                                <h6>A. Xem và đặt xe</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/hddx">1.
                                                Hướng dẫn đặt xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/xtmi">2.
                                                Xe trên TravelMobile</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/ptx">3.
                                                Phí thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/tgtxvtggn">4.
                                                Thời gian thuê xe và thời gian giao nhận</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/ghqd">5.
                                                Giới hạn quãng đường</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/gxtn">6.
                                                Giao xe tận nơi</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/gttttx">7.
                                                Giấy tờ thủ tục thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/gyctx">8.
                                                Gửi yêu cầu thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/dc">9.
                                                Đặt cọc</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>B. Nhận và trả xe</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/hdtx">1.
                                                Hợp đồng thuê xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/qlxt">2.
                                                Quản lí xe thuê</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/dgscd">3.
                                                Đánh giá sau chuyến đi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>C. Thay đổi lịch trình - hủy chuyến</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/hcsdc">1.
                                                Hủy chuyến sau khi đặt cọc</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/cxhc">2.
                                                Chủ xe hủy chuyến</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/ktscd">3.
                                                Kết thúc sớm chuyến đi</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/ht">4.
                                                Hoàn tiền</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>D. Kinh nghiệm thuê xe</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/dx">1.
                                                Đặt xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/gnx">2.
                                                Giao nhận xe</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/dgscd2">3.
                                                Đánh giá sau chuyến đi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>E. Quản lý rủi ro</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/mihtkcsc">1.
                                                TravelMobile hỗ trợ khi có sự cố</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/gbhcd">2.
                                                Gói bảo hiểm chuyến đi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="faqs-box">
                                <h6>F. Câu hỏi khác</h6>
                                <div class="list-faq">
                                    <ul>
                                        <li class="item"><a class="subhead" href="AQ/traveler/txthtxcg">1.
                                                Thuê xe tháng hay thuê xe chạy Grab?</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/txct">2.
                                                Thuê xe có tài?</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/udkgtbb">3.
                                                Ưu đãi khi giới thiệu bạn bè hoặc thuê xe nhiều lần</a></li>
                                        <li class="item"><a class="subhead" href="AQ/traveler/bh2cktx">4.
                                                Bảo hiểm 2 chiều khi thuê xe trên TravelMobile? </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

   
@endsection
