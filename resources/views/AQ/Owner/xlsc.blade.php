@extends('layoutUser.layout')
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
                            <h3 class="faqs-title">1. Xử lí sự cố</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Khách
                                                thuê xe làm xe bị hư hỏng thì giải quyết thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Các sự cố phát sinh trong quá trình thuê xe là điều không mong muốn
                                        đối với cả chủ xe và khách thuê.&nbsp;</p>

                                    <p>Đối với các sự cố nhỏ, TravelMobile khuyến nghị Chủ xe và Khách thuê xe tự
                                        thỏa thuận và thương lượng mức đền bù trên tinh thần hợp tác, dựa
                                        trên các điều khoản trong hợp đồng cho thuê xe tự lái mà hai bên đã
                                        kí kết.</p>

                                    <p>Đối với các sự cố lớn hơn, Chủ xe và Khách thuê có thể sử dụng bảo
                                        hiểm MIC trên ứng dụng (nếu có) hoặc &nbsp;cùng đem xe đến các
                                        Garage chính hãng hoặc các Garage có uy tín (2 bên tự thỏa thuận) để
                                        thẩm định mức độ thiệt hại và xác định chi phí bồi thường dựa trên
                                        kết quả kiểm định và báo giá của Garage.</p>

                                    <p>Bên cạnh đó, chủ xe cần liên hệ ngay với đơn vị cung cấp dịch vụ bảo
                                        hiểm để thông báo về tình hình và nhận sự hướng dẫn cần thiết để làm
                                        thủ tục bồi thường.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
