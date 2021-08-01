@extends('layoutUser.layout')
@section('titleweb', 'Thông tin xe')
<script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8" type="text/javascript"></script>
@section('bodycode')
    <style>
        #thoi-gian1 {
            margin-left: 1%;
            font-size: 12pt;
            background-color: #f8ede4;
            width: 98%;
        }

    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/carprofile.css') }}">


    <div style="margin-top:2%; margin-bottom:100px;">
        <div class="row">
            <div class="col">
                <div class="regular slider">
                    <div>
                        <img src="{{ asset('/images/carimg/' . $img->image) }}">
                    </div>
                    <div>
                        <img src="{{ asset('/images/carimg/' . $img->image_left) }}">
                    </div>
                    <div>
                        <img src="{{ asset('/images/carimg/' . $img->image_right) }}">
                    </div>
                    <div>
                        <img src="{{ asset('/images/carimg/' . $img->image_behind) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7" style="margin-left: 5%; font-size: 12pt; ">

                <div class="row">
                    <div class="col" id="Ten-xe">{{ $carlist->name }} {{ $carlist->model_year }}</div>
                </div>

                <div class="row">
                    <div class="col">
                        <script>
                            star = {!! json_encode($star_num, JSON_HEX_TAG) !!};
                            rating(star)

                            function rating(number) {
                                for (i = 0; i < 5; i++) {
                                    if (i < number) {
                                        document.write('<i class="fa fa-star fa-1x" id="checker" ></i>')
                                    } else {
                                        document.write('<i class="fa fa-star fa-1x"></i>')
                                    }
                                }

                            }
                        </script>
                        <span>Có {{ $trip_number }} chuyến</span>
                    </div>

                </div>

                <div class="row" style="margin-top: 3%">
                    <div class="col">

                        @if ($carlist['auto'] == 1)
                            <span id="card-tag">Số tự động</span>
                        @else
                            <span id="card-tag">Số sàn</span>

                        @endif
                        <span id="card-tag">Giao xe tận nơi</span>
                    </div>
                </div>
                <div class="row" style="padding:5%">
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> ĐẶC DIỂM</span>

                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ url('images/icon-chair.png') }}" class="icon">
                                <span id="text-icon"> Số ghế: {{ $carlist['seatnum'] }}</span>
                            </div>
                            <div class="col-sm-7">
                                <img src="{{ url('images/icon-trans.png') }}" style="width: 45px">
                                <span id="text-icon"> Truyền động:
                                    @if ($carlist['auto'] == 1)
                                        Số tự động
                                    @else
                                        Số sàn
                                    @endif

                                </span>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">


                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ url('images/icon-diesel.png') }}" style="width: 30px">
                                <span id="text-icon">Nhiên liệu:
                                    @if ($carlist['fuel'] == 1)
                                        Xăng
                                    @else
                                        Dầu diesel
                                    @endif
                                </span>
                            </div>
                            <div class="col-sm-7">
                                <img src="{{ url('images/fuel.png') }}" class="icon">
                                <span id="text-icon">Mức nhiên liệu tiêu thụ {{$carlist['consumption']}} lit/100km
                                   
                                </span>
                            </div>
                            
                        </div>

                    </div>
                </div>




                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> MÔ TẢ</span>
                    </div>

                    <div class="col-sm-9" id="mota">

                    </div>

               
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left">TÍNH NĂNG</span>

                    </div>
                    <div class="col">
                        <div class="row">


                            @if ($carlist['bluetooth'] == 1)
                                <div class="col-sm-6">
                                    <i class="fa fa-bluetooth" style="font-size: 17pt"></i>
                                    <span id="text-icon"> Bluetooth</span>
                                </div>
                            @endif

                            @if ($carlist['usb'] == 1)
                                <div class="col-sm-6">
                                    <i class="fa fa-usb" style="font-size: 17pt"></i>
                                    <span id="text-icon"> Khe cắm USB</span>
                                </div>
                            @endif

                            @if ($carlist['camera'] == 1)
                                <div class="col-sm-6" style="margin-top:3%">
                                    <img class="img-ico" src="{{ url('images/reverse_camera.png') }}"
                                        style="width: 20px; height: 20px; margin-right: 10px;">
                                    <span id="text-icon"> Camera lùi</span>
                                </div>
                            @endif

                            @if ($carlist['gps'] == 1)
                                <div class="col-sm-6" style="margin-top:3%">
                                    <img class="img-ico" src="{{ url('images/gps.png') }}"
                                        style="width: 20px; height: 20px; margin-right: 10px;">
                                    <span id="text-icon"> GPS</span>
                                </div>
                            @endif

                            @if ($carlist['convertible'] == 1)
                                <div class="col-sm-6" style="margin-top:3%">
                                    <img src="{{ url('images/convertible.png') }}" class="icon">
                                    <span id="text-icon"> Cửa sổ trời</span>
                                </div>
                            @endif

                            @if ($carlist['kid_chair'] == 1)
                            <div class="col-sm-6" style="margin-top:3%">
                                <img src="{{ url('images/icon-chair.png') }}" class="icon">
                                <span id="text-icon"> Ghế trẻ em</span>
                            </div>
                        @endif
                            
                        </div>

                    </div>


                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> GIẤY TỜ THUÊ XE (BẢN GỐC)</span>

                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-5">
                                <img class="img-ico" src="{{ url('images/cmnd.png') }}"
                                    style="width: 20px; height: 20px; margin-right: 10px;">
                                <span id="text-icon"> CMND và GPLX (đối chiếu)</span>
                            </div>



                        </div>

                    </div>
                </div>


                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> TÀI SẢN THẾ CHẤP</span>
                    </div>
                    <div class="col-sm-9">
                        <span> 15 triệu (tiền mặt/chuyển khoản cho chủ xe khi nhận xe)
                            hoặc Xe máy (kèm cà vẹt gốc) giá trị 15 triệu
                        </span>
                    </div>
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left">ĐIỀU KHOẢN</span>
                    </div>
                    <div class="col-sm-9" id="dieukhoan">

                    </div>

                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> Chủ xe</span>
                    </div>
                    <div class="col-sm-9">
                        <a href="{{ url('/user/profile/' . $chuxe['user_id']) }}" style="color: black">

                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="{{ asset('img/' . $chuxe['avatar_image']) }}"
                                        style="width: 80px; background-size: cover;" class="rounded-circle">
                                </div>
                                <div class="col-sm-8">
                                    <span style="font-weight: bold">{{ $chuxe['name'] }}</span>
                                    <br>
                                    <span>Lưu ý: Số điện thoại của chủ xe sẽ được hiển thị sau khi đặt cọc.</span>
                                </div>
                            </div>

                        </a>

                    </div>
                </div>

                {{-- Đánh giá --}}
                <div class="row">
                    <div class="col" style="font-weight:bold; font-size:15pt">ĐÁNH GIÁ</div>

                </div>


            </div>


            <div class="col-sm-4">
                <div class="card card-rental">
                    <div class="card-body scrollbar-grey" style=" overflow-y: auto;">
                        <div class="row">
                            <div class="col" style="text-align: center">
                                <span id="price">{{ $carlist['rent_price'] }}K</span>
                                <span style=" font-size: 12pt;font-weight: bold;">/ngày</span>
                            </div>
                        </div>

                        <form action="{{ url('user/searchcar/profile/checkday') }}" id="updatethoigian">
                            <span id="start-end-day">
                                Ngày bắt đầu
                            </span>
                            <br>
                            <div class="row" style="margin-top: 3%">
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputCheckIn" placeholder="Bắt đầu"
                                        value="{{ $searchinfo['checkin'] }}" name="checkin">
                                </div>
                                <div class="col-sm-5">
                                    {{-- onchange="return tinhtien()" --}}
                                    <select id="hourstart" class="form-control tm-select" id="children1" name="hourstart">
                                        <option value="0">0:00 am</option>
                                        <option value="1">1:00 am</option>
                                        <option value="2">2:00 am</option>
                                        <option value="3">3:00 am</option>
                                        <option value="4">4:00 am</option>
                                        <option value="5">5:00 am</option>
                                        <option value="6">6:00 am</option>
                                        <option value="7">7:00 am</option>
                                        <option value="8">8:00 am</option>
                                        <option value="9">9:00 am</option>
                                        <option value="10">10:00 am</option>
                                        <option value="11">11:00 am</option>
                                        <option value="12">12:00 pm</option>
                                        <option value="13">1:00 pm</option>
                                        <option value="14">2:00 pm</option>
                                        <option value="15">3:00 pm</option>
                                        <option value="16">4:00 pm</option>
                                        <option value="17">5:00 pm</option>
                                        <option value="18">6:00 pm</option>
                                        <option value="19">7:00 pm</option>
                                        <option value="20">8:00 pm</option>
                                        <option value="21">9:00 pm</option>
                                        <option value="22">10:00 pm</option>
                                        <option value="23">11:00 pm</option>
                                    </select>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                            <br>
                            <span id="start-end-day">
                                Ngày kết thúc
                            </span>
                            <br>
                            <div class="row" style="margin-top: 3%">
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="inputCheckOut" placeholder="Kết thúc"
                                        value="{{ $searchinfo['checkout'] }}" name="checkout">
                                </div>
                                <div class="col-sm-5">
                                    <select id="hourend" class="form-control tm-select" id="children1" name="hourend">
                                        <option value="0">0:00 am</option>
                                        <option value="1">1:00 am</option>
                                        <option value="2">2:00 am</option>
                                        <option value="3">3:00 am</option>
                                        <option value="4">4:00 am</option>
                                        <option value="5">5:00 am</option>
                                        <option value="6">6:00 am</option>
                                        <option value="7">7:00 am</option>
                                        <option value="8">8:00 am</option>
                                        <option value="9">9:00 am</option>
                                        <option value="10">10:00 am</option>
                                        <option value="11">11:00 am</option>
                                        <option value="12">12:00 pm</option>
                                        <option value="13">1:00 pm</option>
                                        <option value="14">2:00 pm</option>
                                        <option value="15">3:00 pm</option>
                                        <option value="16">4:00 pm</option>
                                        <option value="17">5:00 pm</option>
                                        <option value="18">6:00 pm</option>
                                        <option value="19">7:00 pm</option>
                                        <option value="20">8:00 pm</option>
                                        <option value="21">9:00 pm</option>
                                        <option value="22">10:00 pm</option>
                                        <option value="23">11:00 pm</option>
                                    </select>
                                </div>
                            </div>
                            <input type="input" hidden readonly name="car_id" id="car_id1" value="">
                            <div class="row" style="margin-top: 5%">
                                <div class="col" style="text-align: center">
                                    <input type="submit" id="capnhatthoigian" class="btn btn-success"
                                        value="Cập nhật lại thời gian">
                                </div>
                            </div>

                        </form>

                        <div class="row" style="margin-top: 5%" hidden id="thongbaothoigian">
                            <div class="col" style="text-align: center">
                                <span style="color: red"> Xe có chuyến trong khoảng thời gian bạn chọn, vui lòng chọn
                                    lại</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%" hidden id="giaonhanxe">
                            <div class="col" style="text-align: center">
                                <span style="color: red"> Thời gian giao hoặc nhận xe không đúng</span>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5%" hidden id="thoigianquakhu">
                            <div class="col" style="text-align: center">
                                <span style="color: red"> Khoảng thời gian bắt đầu / kết thúc không hợp lệ</span>
                            </div>
                        </div>
                        <div class="row" id="thoi-gian">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Thời gian giao nhận xe</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span>5:00-23:00</span>
                            </div>
                        </div>
                        <br>
                        <span id="start-end-day">
                            Địa điểm giao xe
                        </span>
                        <br>

                        <div class="row" style="margin-top: 3%; ">
                            <div class="col">
                                <i class="fa fa-map-marker fa-2x "></i>
                                <span style="font-size: 12pt;" id="diadiemgiaoxe">{{ $searchinfo['city'] }}</span>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 3%; ">
                            <div class="col">
                                <input type="checkbox" id="checkgiaoxe" onclick="return ktcheck()">
                                <span style="font-size: 13pt;"> Giao xe tận nơi </span>
                            </div>

                        </div>


                        <div class="row" id="thoi-gian">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Dịch vụ giao xe tận nơi</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span>Bán kính <span id="bankinhgiao">{{ $carlist['free_ship_distance'] }}</span>
                                    km</span>
                            </div>
                        </div>
                        <div class="row" id="thoi-gian1">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Phí giao nhận xe (2 chiều) </span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span id="phigiaoxe">{{ $carlist['shipping_price_km'] }}000</span>
                                <span> đ/km</span>
                            </div>
                        </div>
                        <br>


                        <span id="start-end-day">
                            Giới hạn km
                        </span>
                        <br>
                        <div class="row" style="margin-top: 3%; ">
                            <div class="col">
                                <span style="font-size: 12pt;">Tối đa <span
                                        style="font-weight: bold;">{{ $carlist['max_travel_distance'] }}</span>km/ngày.
                                    Phí <span
                                        style="font-weight: bold;">{{ $carlist['over_max_travel_cost'] }}K</span>/km
                                    vượt giới hạn.</span>
                            </div>
                        </div>
                        <br>
                        <span id="start-end-day">
                            Chi tiết giá
                        </span>
                        <br>
                        <div class="row" id="gia-thue">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Đơn giá thuê</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span id="dongiathue" name="dongiathue">880 000 </span>
                                <span>đ/ ngày</span>
                            </div>
                        </div>
                        <div class="row" id="gia-thue">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Phí dịch vụ</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span id="phidichvu" name="phidichvu">61 600 </span>
                                <span>đ/ ngày</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row" id="gia-thue1">
                            <div class="col-sm-6">
                                <span style="margin-left:2%">Tổng phí thuê xe</span>
                            </div>
                            <div class="col-sm-6" style="text-align: right">
                                <span id="tongcong" name="tongcong">941 600 </span>
                                x
                                <span id="days" name="days" style="font-weight: bold">1</span>
                                <span style="font-weight: bold">ngày</span>
                            </div>
                        </div>

                        <br>
                        <div class="row" id="gia-thue1">
                            <div class="col-sm-6">
                                <span style="margin-left:2%">Phí giao xe</span>
                            </div>
                            <div class="col-sm-6" style="text-align: right">
                                <span id="giaoxe" name="giaoxe"> </span>
                                <span>đ</span>
                                <span id="hienthikm"> </span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row" id="gia-thue2">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Tổng cộng</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span id="tongphithuexe" name="tongphithuexe">941 600 </span>
                                <span>đ</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row" id="gia-thue2">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Đặt cọc</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span id="datcoc" name="datcoc">941 600 </span>
                                <span>đ</span>
                            </div>
                        </div>
                        <form action="{{ url('user/searchcar/profile/checkout') }}" method="POST">
                            @csrf
                            <input type="input" hidden readonly name="contract_id" id="contract_id" value="0">
                            <input type="input" hidden readonly name="user_id" id="user_id" value="">
                            <input type="input" hidden readonly name="car_id" id="car_id" value="">
                            <input type="input" hidden readonly name="contract_date" id="contract_date" value="">
                            <input type="input" hidden readonly name="pickup_date" id="pickup_date" value="">
                            <input type="input" hidden readonly name="return_date" id="return_date" value="">
                            <input type="input" hidden readonly name="rental_price" id="rental_price" value="">
                            <input type="input" hidden readonly name="service_cost" id="service_cost" value="">
                            <input type="input" hidden readonly name="pickup_address" id="pickup_address" value="">
                            <input type="input" hidden readonly name="shipping_cost" id="shipping_cost" value="">
                            <input type="input" hidden readonly name="contract_value" id="contract_value" value="">
                            <input type="input" hidden readonly name="deposit" id="deposit" value="">

                            <div class="row" style="margin: 5% 0%; ">
                                <div class="col-sm-12">
                                    <input type="button" style="padding:10px ; font-weight: bold; "
                                        class="form-control btn btn-success" id="nutao" value="ĐẶT XE"
                                        onclick="return checkgplx()">

                                    <input type="submit" id="nutsubmit" hidden>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>



        </div>


        {{-- Modal form login anh GPLX --}}

        <button type="button" hidden id="btn" class="btn btn-primary" data-toggle="modal" data-target="#modelDN">
            Dang Nhap
        </button>

        <button type="button" hidden id="btn1" class="btn btn-primary" data-toggle="modal" data-target="#modelGPLX">
            GPLX
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modelDN" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 50%">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" id="exampleModalLabel" style="text-align: center;">Thông báo</h4>
                        <br>
                        <div style="text-align: center;">
                            <i class="fa fa-exclamation-triangle fa-2x" style="color: red"></i>

                            <span style="font-size: 13pt"> Bạn cần đăng nhập để tiếp tục</span>
                        </div>

                        <br>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('/login') }}">
                            <button type="button" class="btn btn-primary">Đăng nhập</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modelGPLX" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 50%">
                    <div class="modal-header">

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 class="modal-title" id="exampleModalLabel" style="text-align: center;">Thông báo</h4>
                        <br>
                        <div style="text-align: center;">
                            <i class="fa fa-exclamation-triangle fa-2x" style="color: red"></i>
                            <span style="font-size: 13pt"> Bạn cần xác thực GPLX để có thể đặt xe</span>
                        </div>

                        <br>
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('user/profile/' . $user_id . '/edit') }}">
                            <button type="button" class="btn btn-primary">Đồng ý</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>

                <!-- COMMENT 1 - START -->
                <section class="content-item" id="comments">
                    <div class="container">   
                        <div class="row">
                            <div class="col-sm-8">   
                    @foreach ($review as $item)

                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading">{{ $item->user->name }}</h4>
                            <p>{{ $item->comment }}</p>
                            <ul class="list-unstyled list-inline media-detail pull-left">
                                <div id="rating">
                                    @if ($item->star_num == 1) 
                                        <input type="radio"  id="" name=""read value="5" />
                                        <label class = "full" for="" title="Awesome - 5 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="4" />
                                        <label class = "full" for="" title="Pretty good - 4 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="3" />
                                        <label class = "full" for="" title="Meh - 3 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="2" />
                                        <label class = "full" for="" title="Kinda bad - 2 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="1" checked />
                                        <label class = "full" for="" title="Sucks big time - 1 star"></label>
                                    @endif
                                    @if ($item->star_num == 2)
                                        <input type="radio"  id="" name=""read value="5" />
                                        <label class = "full" for="" title="Awesome - 5 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="4" />
                                        <label class = "full" for="" title="Pretty good - 4 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="3" />
                                        <label class = "full" for="" title="Meh - 3 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="2" checked />
                                        <label class = "full" for="" title="Kinda bad - 2 stars"></label>
                                    
                                        <input type="radio"  id="" name=""read value="1" />
                                        <label class = "full" for="" title="Sucks big time - 1 star"></label>
                                     @endif
                            @if ($item->star_num == 3)
                                <input type="radio"  id="" name=""read value="5" />
                                    <label class = "full" for="" title="Awesome - 5 stars"></label>
                                
                                    <input type="radio"  id="" name=""read value="4" />
                                    <label class = "full" for="" title="Pretty good - 4 stars"></label>
                                
                                    <input type="radio"  id="" name=""read value="3" checked/>
                                    <label class = "full" for="" title="Meh - 3 stars"></label>
                                
                                    <input type="radio"  id="" name=""read value="2" />
                                    <label class = "full" for="" title="Kinda bad - 2 stars"></label>
                                
                                    <input type="radio"  id="" name=""read value="1"/>
                                    <label class = "full" for="" title="Sucks big time - 1 star"></label>
                           @endif
                            @if ($item->star_num == 4) 
                               <input type="radio"  id="" name=""read value="5" />
                                <label class = "full" for="" title="Awesome - 5 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="4" checked/>
                                <label class = "full" for="" title="Pretty good - 4 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="3" />
                                <label class = "full" for="" title="Meh - 3 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="2" />
                                <label class = "full" for="" title="Kinda bad - 2 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="1" />
                                <label class = "full" for="" title="Sucks big time - 1 star"></label> 
                           @endif
                            @if ($item->star_num == 5) 
                                <input type="radio"  id="" name=""read value="5" checked/>
                                <label class = "full" for="" title="Awesome - 5 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="4" />
                                <label class = "full" for="" title="Pretty good - 4 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="3" />
                                <label class = "full" for="" title="Meh - 3 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="2" />
                                <label class = "full" for="" title="Kinda bad - 2 stars"></label>
                            
                                <input type="radio"  id="" name=""read value="1" />
                                <label class = "full" for="" title="Sucks big time - 1 star"></label>
                           @endif 
                                </div>
                            </ul>
                            <ul class="list-unstyled list-inline media-detail pull-right">
                                <li><i class="fa fa-calendar"></i>{{ $item->created_at }}</li>
                                <li></li>         
                            </ul>
                        </div>
                    </div>
                   @endforeach 
                            </div>
               
                    </div>
                </div>
            </div>
        </section>


        {{-- Ajax --}}
        <script>
            jQuery(function($) {

                $("#updatethoigian").submit(function(e) {
                    e.preventDefault();
                    let checkin = $("#inputCheckIn").val()
                    let hourstart = $("#hourstart").val()
                    let checkout = $("#inputCheckOut").val();
                    let hourend = $("#hourend").val();
                    let capnhatthoigian = $("#capnhatthoigian").val()
                    let car_id = $("#car_id1").val()


                    timestart = checkin + '  ' + hourstart + ':00:00';
                    var ngaybatdau = new Date(timestart);
                    ngaybatdau = ngaybatdau.getTime()
                    timestart = checkout + '  ' + hourend + ':00:00';
                    var ngaykethuc = new Date(timestart);
                    ngaykethuc = ngaykethuc.getTime()


                    if (ngaykethuc - ngaybatdau < 0) {


                        document.getElementById('inputCheckIn').value = checkout
                        document.getElementById('hourstart').value = hourend
                        document.getElementById('inputCheckOut').value = checkin
                        document.getElementById('hourend').value = hourstart


                    }


                    $.ajax({
                        type: "get",
                        url: "profile/checkday",
                        data: {

                            checkin: checkin,
                            hourstart: hourstart,
                            checkout: checkout,
                            hourend: hourend,
                            car_id: car_id
                        },

                        dataType: "text",
                        success: function(response) {
                            if (response == 'true') {
                                tinhtien();
                                document.getElementById('thongbaothoigian').hidden = true;
                                document.getElementById('nutao').disabled = false;

                                if (giaonhanxe() == '1' || kiemtrangay() == '1') {
                                    document.getElementById('nutao').disabled = true;
                                }

                                // giaonhanxe();
                                // kiemtrangay();

                            } else {
                                document.getElementById('nutao').disabled = true;
                                document.getElementById('thongbaothoigian').hidden = false;

                            }

                            // let abc = "Result : " + response;
                            // console.log(abc);
                            //    $("#Result").html(abc);
                        }
                    });

                });

            })
        </script>


        {{-- <script src="{{ asset('script/map.js') }}"></script> --}}
        <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {
                if ($(window).width() < 438) {
                    // Slick carousel
                    $('.regular').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    });
                } else {
                    $('.regular').slick({
                        infinite: false,
                        dots: true,
                        slidesToShow: 3,
                        slidesToScroll: 1
                    });
                }

            });
        </script>
        <script>
            let searchinfo = {!! json_encode($searchinfo, JSON_HEX_TAG) !!};
            let carlist = {!! json_encode($carlist, JSON_HEX_TAG) !!};
            let status = {!! json_encode($status, JSON_HEX_TAG) !!};

            document.getElementById('mota').innerHTML = carlist['description'];
            document.getElementById('dieukhoan').innerHTML = carlist['rules'];

            function checkgplx() {

                let id = {!! json_encode($user_id, JSON_HEX_TAG) !!};

                let gplx = {!! json_encode($gplx, JSON_HEX_TAG) !!};
                if (id == null) {
                    document.getElementById('btn').click() = true;
                }
                if ((gplx == null) || (status == 0)) {
                    document.getElementById('btn1').click() = true;
                } {
                    document.getElementById('nutsubmit').click() = true;
                }
            }
        </script>

        <script src="{{ asset('script/carprofile.js') }}"></script>

        <style type="text/css">
            /* div,label{margin:0;padding:0;}
    body{margin:20px;}
    h1{font-size:1.5em;margin:10px;}
    /****** Style Star Rating Widget *****/
            #rating {
                border: none;
                float: left;
            }

            #rating>input {
                display: none;
            }

            /*ẩn input radio - vì chúng ta đã có label là GUI*/
            #rating>label:before {
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            /*1 ngôi sao*/
            #rating>.half:before {
                content: "\f089";
                position: absolute;
            }

            /*0.5 ngôi sao*/
            #rating>label {
                color: #ddd;
                float: right;
            }

            /*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
            /*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
            #rating>input:checked~label,
            #rating:not(:checked)>label:hover,
            #rating:not(:checked)>label:hover~label {
                color: #2E7093;
            }

            /* Hover vào các sao phía trước ngôi sao đã chọn*/
            #rating>input:checked+label:hover,
            #rating>input:checked~label:hover,
            #rating>label:hover~input:checked~label,
            #rating>input:checked~label:hover~label {
                color: #2E7093;
            }

            */ .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                top: -9999px;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */

            .content-item {
                padding: 30px 0;
                background-color: #FFFFFF;
            }

            .content-item.grey {
                background-color: #F0F0F0;
                padding: 50px 0;
                height: 100%;
            }

            .content-item h2 {
                font-weight: 700;
                font-size: 35px;
                line-height: 45px;
                text-transform: uppercase;
                margin: 20px 0;
            }

            .content-item h3 {
                font-weight: 400;
                font-size: 20px;
                color: #555555;
                margin: 10px 0 15px;
                padding: 0;
            }

            .content-headline {
                height: 1px;
                text-align: center;
                margin: 20px 0 70px;
            }

            .content-headline h2 {
                background-color: #FFFFFF;
                display: inline-block;
                margin: -20px auto 0;
                padding: 0 20px;
            }

            .grey .content-headline h2 {
                background-color: #F0F0F0;
            }

            .content-headline h3 {
                font-size: 14px;
                color: #AAAAAA;
                display: block;
            }


            #comments {
                box-shadow: 0 -1px 6px 1px rgba(0, 0, 0, 0.1);
                background-color: #FFFFFF;
            }

            #comments form {
                margin-bottom: 30px;
            }

            #comments .btn {
                margin-top: 7px;
            }

            #comments form fieldset {
                clear: both;
            }

            #comments form textarea {
                height: 100px;
            }

            #comments .media {
                border-top: 1px dashed #DDDDDD;
                padding: 20px 0;
                margin: 0;
            }

            #comments .media>.pull-left {
                margin-right: 20px;
            }

            #comments .media img {
                max-width: 100px;
            }

            #comments .media h4 {
                margin: 0 0 10px;
            }

            #comments .media h4 span {
                font-size: 14px;
                float: right;
                color: #999999;
            }

            #comments .media p {
                margin-bottom: 15px;
                text-align: justify;
            }

            #comments .media-detail {
                margin: 0;
            }

            #comments .media-detail li {
                color: #AAAAAA;
                font-size: 12px;
                padding-right: 10px;
                font-weight: 600;
            }

            #comments .media-detail a:hover {
                text-decoration: underline;
            }

            #comments .media-detail li:last-child {
                padding-right: 0;
            }

            #comments .media-detail li i {
                color: #666666;
                font-size: 15px;
                margin-right: 10px;
            }

        </style>

        <script type="text/javascript">

        </script>
    @endsection
