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
                            <h3 class="faqs-title">2. Thuê xe có tài</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Mioto
                                                có xe có tài không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Mioto đã có dịch vụ thuê xe có tài xế. Khách thuê có thể mở ứng dụng
                                        và chọn mục Thuê xe có tài để tìm và thuê xe có tài xế.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
