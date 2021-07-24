@extends('layoutUser.layout')
@section('titleweb', 'History for rental')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rental.css') }}">
@section('bodycode')

    <div style="margin-top: 10%; margin-bottom:5%" class="container">
        <h3 style="text-align: center">Thông tin chi tiết hợp đồng (#15)</h3>

        <div class="row" style="margin-top: 2%">

            <div class="col-sm-6" style="text-align: right">
                <img src="{{ asset('images/cars1.jpg') }}" style="height:130px">
            </div>
            <div class="col-sm-6" style="text-align: left">
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tên chủ xe:</b> Mercedes C200</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tên xe:</b> Mercedes C200</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Biển số:</b> 51G-1234566668</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Số km tối đa được chạy:</b> 300 Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tiền khi chạy vượt:</b> 3000 đ/Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Giá thuê mặc định:</b> 1000k</span>
                    </div>
                </div>





            </div>

        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Tên khách hàng:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">Lê Nguyễn Thành Nhân</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Số điện thoại:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">0375515819</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Ngày nhận xe:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">07-24-2021 3 giờ</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Ngày trả xe:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">07-25-2021 3 giờ</span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Tiền thuê:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">2000000 đ </span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Địa chỉ giao xe:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">223 Đường Lê Tấn Bê, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Phí giao xe:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">30000đ</span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Đã đặt cọc:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">30000đ</span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Phí dịch vụ:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">30000đ</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Tiền cọc trả lại sau khi cho thuê thành công:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">30000đ</span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Tiền thu của khách:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">30000đ</span>
            </div>
        </div>




    </div>


@endsection
