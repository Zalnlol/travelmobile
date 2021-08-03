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
                            <h3 class="faqs-title">1. Hợp đồng thuê xe</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Thuê
                                                xe có cần kí hợp đồng hay giấy tờ pháp lí nào không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Khi nhận xe, để đảm bảo quyền lợi cho 2 bên và giải quyết tranh chấp
                                        khi xảy ra rủi ro, bạn sẽ kí hợp đồng và biên bản bàn giao xe với
                                        chủ xe, hợp đồng này sẽ được lập thành 2 bản và mỗi bên sẽ được giữ
                                        1 bản.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
