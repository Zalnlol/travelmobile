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
                            <h3 class="faqs-title">1. TravelMobile hỗ trợ khi có sự cố</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Có sự
                                                cố thì liên hệ nhờ TravelMobile hỗ trợ như thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khách thuê có thể liên hệ Hotline 0376515819 (trong giờ hành chính)
                                        để được hỗ trợ sớm nhất.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
    </section>
@endsection
