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
                            <h3 class="faqs-title">5. Giới hạn quãng đường</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Xe
                                                trên TravelMobile có giới hạn quãng đường thuê hay không ? Đi quá km
                                                tính thế nào ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Để đảm bảo cho chất lượng của xe, đảm bảo an toàn cho khách hàng, nên
                                        hầu hết&nbsp;chủ xe sẽ quy định số km giới hạn.</p>

                                    <p>Số km giới hạn sẽ do chủ xe quy định, thường sẽ là 300km-500km/ ngày,
                                        và được tính tổng trên số ngày đi.</p>

                                    <p>Ví dụ bạn thuê xe có giới hạn km là 300km/ngày và thuê trong 2 ngày,
                                        thì số km bạn có thể đi là 600km.</p>

                                    <p>Và phí phụ trội sẽ là từ 2-5k/km vượt giới hạn.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
