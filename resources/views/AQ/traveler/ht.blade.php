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
                            <h3 class="faqs-title">4. Hoàn tiền</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Thời
                                                gian hoàn tiền ? Bao lâu được hoàn tiền ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Kể từ ngày xác nhận hoàn tiền, bộ phận kế toán TravelMobile sẽ chuyển khoản
                                        cho khách thuê trong vòng 3 ngày làm việc tiếp theo (trừ thứ 7, Chủ
                                        nhật, lễ, Tết).</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
