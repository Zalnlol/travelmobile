@extends('layoutUser.layout')
@section('titleweb', 'History for rental')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rental.css') }}">
@section('bodycode')

    <div style="margin-top: 10%; margin-bottom:5%" class="container">
        <h3 style="text-align: center">Thông tin chi tiết hợp đồng {{$data3['contract_id']}}</h3>

        <div class="row" style="margin-top: 2%">

            <div class="col-sm-6" style="text-align: right">
                <img src="{{ asset('images/cars1.jpg') }}" style="height:130px">
            </div>
            <div class="col-sm-6" style="text-align: left">
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tên chủ xe:</b> {{$data3['user_name']}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tên xe:</b> {{$data3['car_name']}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Biển số:</b> {{$data3['plate_id']}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Số km tối đa được chạy:</b> {{$data3['max_travel_distance']}} Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Tiền khi chạy vượt:</b> {{$data3['over_max_travel_cost']}} đ/Km</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <span id="title-span"><b>Giá thuê mặc định:</b> {{$data3['rent_price']}}k</span>
                    </div>
                </div>





            </div>

        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Tên khách hàng:</b></span>
            </div>
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{$data3['customer_name']}}</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-sm-6" style="text-align: right">
                <span id="title-span" > <b>Số điện thoại:</b></span>
            </div>

        

            @if ($data3['status']!='Chờ xác nhận')
            <div class="col-sm-6">
                <span id="title-span" style="text-align: left">{{$data3['customer_mobile']}}</span>
            </div>          
            @endif

           
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
                <span id="title-span" > <b>Khách đặt cọc:</b></span>
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
