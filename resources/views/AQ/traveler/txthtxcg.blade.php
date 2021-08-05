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
                            <h3 class="faqs-title">1. Thuê xe tháng hay thuê xe chạy Grab</h3>
                            <div class="qa-box">
                                <div>
                                    <div>
                                        <p><i></i><span>Có cho
                                                thuê tháng không ? Có cho thuê chạy Grab không ?</span></p>
                                    </div>
                                </div>
                                <div class="answer">
                                    <p>Do chủ xe trên ứng dụng đa số là xe cá nhân nên ngoài thời gian sử
                                        dụng sẽ cho thuê theo ngày. Vậy nên có rất ít chủ xe cho thuê theo
                                        tháng hoặc cho thuê chạy Grab.</p>
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
