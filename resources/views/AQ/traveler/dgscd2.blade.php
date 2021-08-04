@extends('layoutUser.layoutstaticpage')
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
                            <h3 class="faqs-title">3. Đánh giá sau chuyến đi</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Các
                                                đánh giá của người thuê có đúng 100% không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Sau khi kết thúc chuyến đi, chủ xe sẽ đánh giá khách thuê và khách
                                        thuê sẽ đánh giá chất lượng xe, dịch vụ của chủ xe.</p>

                                    <p>Các đánh giá này 100% là thực tế và có giá trị tham khảo nếu bạn muốn
                                        đặt thuê xe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
