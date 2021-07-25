@extends('layoutUser.layout')
@section('titleweb', 'Car Profile')
@section('bodycode')
    <style>
        #thoi-gian1 {
            margin-left: 1%;
            font-size: 12pt;
            background-color: #f8ede4;
            width: 98%;
        }

    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/carprofile.css') }}">


    <div style="margin-top:2%; margin-bottom:100px;">
        <div class="row">
            <div class="col">
                <div class="regular slider">
                    <div>
                        <img src="{{ asset('' . $img->image) }}">
                    </div>
                    <div>
                        <img src="{{ asset('' . $img->image_left) }}">
                    </div>
                    <div>
                        <img src="{{ asset('' . $img->image_right) }}">
                    </div>
                    <div>
                        <img src="{{ asset('' . $img->image_behind) }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7" style="margin-left: 5%; font-size: 12pt; ">

                <div class="row">
                    <div class="col" id="Ten-xe">{{ $carlist->name }}</div>
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
                        </div>

                    </div>
                </div>




                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> MÔ TẢ</span>
                    </div>
                    <div lass="col-sm-9">
                        <div class="row">
                            <div class="col">
                                <SPan>{{ $carlist['rules'] }}</SPan>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left">TÍNH NĂNG</span>

                    </div>
                    <div lass="col-sm-9">
                        <div class="row">


                            @if ($carlist['bluetooth'] == 1)
                                <div class="col-sm-5">
                                    <i class="fa fa-bluetooth" style="font-size: 17pt"></i>
                                    <span id="text-icon"> Bluetooth</span>
                                </div>
                            @endif

                            @if ($carlist['usb'] == 1)
                                <div class="col-sm-7">
                                    <i class="fa fa-usb" style="font-size: 17pt"></i>
                                    <span id="text-icon"> Khe cắm USB</span>
                                </div>
                            @endif

                            @if ($carlist['camera'] == 1)
                                <div class="col-sm-5" style="margin-top:3%">
                                    <img class="img-ico" src="{{ url('images/reverse_camera.png') }}"
                                        style="width: 20px; height: 20px; margin-right: 10px;">
                                    <span id="text-icon"> Camera lùi</span>
                                </div>
                            @endif

                            @if ($carlist['gps'] == 1)
                                <div class="col-sm-7" style="margin-top:3%">
                                    <img class="img-ico" src="{{ url('images/gps.png') }}"
                                        style="width: 20px; height: 20px; margin-right: 10px;">
                                    <span id="text-icon"> GPS</span>
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
                    <div class="col-sm-9">
                        <span> 1. Chấp nhận Hộ khẩu Thành phố/KT3 Thành phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi
                            nhận xe)
                            CMND và GPLX đối chiếu
                            <br>
                            2. Tài sản đặt cọc (1 trong 2 hình thức)
                            <br>
                            - Xe máy (giá trị >15triệu) + Cà vẹt (bản gốc)
                            <br>
                            - Hoặc cọc tiền mặt 15 triệu.
                            <br>
                            <br>

                            * Quý khách lưu ý một số qui định sau:
                            <br>
                            Không sử dụng xe thuê vào mục đích phi pháp, trái pháp luật
                            Không được sử dụng xe thuê để cầm cố hay thế chấp, sử dụng đúng mục đích
                            Không hút thuốc,ăn kẹo cao su xả rác trong xe
                            Không chở hàng quốc cấm dễ cháy nổ,hoa quả thưc phẩm lưu mùi trong xe.
                            Khi trả xe, khách hàng vui lòng vệ sinh sạch sẽ hoặc gửi phụ thu thêm phí rửa xe, hút bụi nếu xe
                            dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ)
                            Trân trọng cảm ơn, chúc quý khách có những chuyến đi tuyệt vời!
                        </span>
                    </div>

                </div>

                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-3">
                        <span id="title-left"> Chủ xe</span>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{ asset('' . $chuxe['avatar_image']) }}"
                                    style="width: 80px; background-size: cover;" class="rounded-circle">
                            </div>
                            <div class="col-sm-8">
                                <span style="font-weight: bold">{{ $chuxe['name'] }}</span>
                                <br>
                                <span>Lưu ý: Số điện thoại của chủ xe sẽ được hiển thị sau khi đặt cọc.</span>
                            </div>
                        </div>
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
                        <form action="{{url('user/searchcar/profile/checkout')}}" method="POST">
                            <span id="start-end-day">
                                Ngày bắt đầu
                            </span>
                            <br>
                            <div class="row" style="margin-top: 3%">
                                <div class="col-sm-7">
                                    <input  type="text" class="form-control" id="inputCheckIn"
                                        placeholder="Bắt đầu" value="{{ $searchinfo['checkin'] }}"
                                        onchange="return onselect()">
                                </div>
                                <div class="col-sm-5">
                                    <select  id="hourstart" class="form-control tm-select" id="children1"
                                        onchange="return tinhtien()">
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
                                    <input  type="text" class="form-control" id="inputCheckOut"
                                        placeholder="Kết thúc" value="{{ $searchinfo['checkout'] }}"
                                        onchange="return tinhtien()">
                                </div>
                                <div class="col-sm-5">
                                    <select  id="hourend" class="form-control tm-select" id="children1"
                                        onchange="return tinhtien()">
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
                            <div class="row" id="thoi-gian">
                                <div class="col-sm-7">
                                    <span style="margin-left:2%">Thời gian giao nhận xe</span>
                                </div>
                                <div class="col-sm-5" style="text-align: right">
                                    <span>5:30-23:30</span>
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
                                    <input type="checkbox" id="checkgiaoxe" checked onclick="return ktcheck()">
                                    <span style="font-size: 13pt;"> Giao xe tận nơi </span>
                                </div>

                            </div>


                            <div class="row" id="thoi-gian">
                                <div class="col-sm-7">
                                    <span style="margin-left:2%">Dịch vụ giao xe tận nơi</span>
                                </div>
                                <div class="col-sm-5" style="text-align: right">
                                    <span>Bán kính {{ $carlist['free_ship_distance'] }} km</span>
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
                            @csrf
                            <input type="input" hidden readonly name="contract_id" id="contract_id" value="0">
                            <input type="input" hidden readonly name="user_id" id="user_id" value="">
                            <input type="input" hidden readonly name="car_id" id="car_id" value="">
                            <input type="input" hidden readonly name="contract_date" id="contract_date" value="" >
                            <input type="input" hidden readonly name="pickup_date" id="pickup_date" value=""  >
                            <input type="input" hidden readonly name="return_date" id="return_date" value=""  >
                            <input type="input" hidden readonly name="rental_price" id="rental_price" value=""  >
                            <input type="input" hidden readonly name="service_cost" id="service_cost" value=""  >
                            <input type="input" hidden readonly name="pickup_address" id="pickup_address" value=""  >
                            <input type="input" hidden readonly name="shipping_cost" id="shipping_cost"  value="" >
                            <input type="input" hidden readonly name="contract_value" id="contract_value" value=""  >
                            <input type="input" hidden readonly name="deposit" id="deposit"  value="" >

                            <div class="row" style="margin: 5% 0%; ">
                                <div class="col-sm-12">
                                    <input type="button" style="padding:10px ; font-weight: bold; "
                                        class="form-control btn btn-success" value="ĐẶT XE" onclick="return checkgplx()" >

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
                  <a href="{{url('/login')}}">
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
                  <a href="">
                    <button type="button" class="btn btn-primary">Đồng ý</button>
                  </a>
                  
                </div>
              </div>
            </div>
          </div>





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

            function  checkgplx(){
                    
                let id = {!! json_encode($user_id, JSON_HEX_TAG) !!};
                
                let gplx = {!! json_encode($gplx, JSON_HEX_TAG) !!};  
                if(id==null){
                    document.getElementById('btn').click() = true;
                }else{
                    document.getElementById('nutsubmit').click() = true;
                }
                if(gplx==null){
                    document.getElementById('btn1').click() = true;
                }{
                    // document.getElementById('nutsubmit').click() = true;
                } 
            }
            
        </script>

    <script src="{{ asset('script/carprofile.js') }}"></script>

    @endsection
