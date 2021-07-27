@extends('layoutUser.layout')
@section('titleweb', 'History for  rental')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
@section('bodycode')
    <div style="padding: 8% 0%; ">
        <div class="row" style="box-shadow: 0px 0px 20px rgb(233, 227, 227); height:auto">

            <div class="col-sm-3" style="text-align: right ; ">
                <a href="{{ url('/user/mycars') }}">
                    <span id="title-nav2">Danh sách xe</span>
                </a>
            </div>



            <div class="col-sm-2" style="text-align: left; margin-left:5% ">
                <a href="{{ url('/user/mycars/triplist') }}">
                    <span id="title-nav2" >Danh sách chuyến</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/register') }}">
                    <span id="title-nav2">Đăng ký xe</span>
                </a>
            </div>

            <div class="col-sm-2" style="text-align: left; margin-left:1% ">
                <a href="{{ url('/user/mycars/history') }}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">Lịch sử cho thuê</span>
                </a>
            </div>


        </div>

        <div class="container" style="margin-top: 5%">
        </div>


        @foreach ($data3 as $rental)

            <div class="col-lg-12" style="margin-top: 10px">

                <div class="card" style="width: 50%; margin-left:25%">

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <span id="namecar">{{ $rental['name'] }}</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 2%">
                            <div class="col-sm-3">
                                <img src="{{ asset('/images/carimg/'.$rental['image']) }}" style="height:100px" ` alt="">
                            </div>
                            <div class="col-sm-8" style="margin-left:3%">
                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Mã hợp đồng:</b> #{{ $rental['contract_id'] }}</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Bắt đầu:</b> {{ $rental['pickup_date'] }} giờ</span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Kết thúc:</b>{{ $rental['return_date'] }} giờ</span>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <span id="content"><b>Địa chỉ:</b>{{ $rental['pickup_address'] }}</span>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col" style="text-align: center">
                                        <span style="font-size: 11pt; font-weight:bold">Đã cọc:
                                            {{ $rental['deposit'] }}đ</span>
                                    </div>

                                    <div class="col" style="text-align: center">
                                        <span style="font-size: 11pt; font-weight:bold">Còn lại:
                                            {{ $rental['remaining'] }}đ</span>
                                    </div>

                                </div>
                  
                                @if ($rental['status'] != 'Chờ xác nhận')
                                    <div class="row">
                                        <div class="col">
                                            <span style="font-size: 11pt;">
                                                <b>Số điện thoại: </b> {{ $rental['phone'] }}
                                            </span>
                                        </div>
                                    </div>

                                @else

                                    <div class="row">
                                        <div class="col">
                                            <span style="font-size: 11pt;">
                                                <b>Lưu ý: </b> Số điện thoại khách hàng sẽ được hiện sao khi xác nhận
                                            </span>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col" style="font-size:12pt">

                                @switch($rental['status'])
                                    @case('Đã hoàn thành')
                                        <i class="fa fa-circle" style="color: rgb(0, 255, 0)"></i>
                                        Đã hoàn thành
                                    @break
                                  

                                @endswitch


                    </div>

                    <div class="col" style="text-align: right">
                        <div class="dropdown">

                            <span data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                id="action1">Hành động</span>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                @if ($rental['status']=='Đã hoàn thành' )
                                    <a class="dropdown-item"
                                        href="{{ url('/user/mycars/triplist/xemchitiet/' . $rental['contract_id']) }}">Xem chi tiết</a>
                                @endif
              
                      


                            </div>



                        </div>
                    </div>
                </div>

            </div>
    </div>




    </div>

    @endforeach



    </div>






@endsection
