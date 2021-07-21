@extends('layoutUser.layout')
@section('titleweb', 'Car Profile')
@section('bodycode')

    <link rel="stylesheet" type="text/css" href="{{ asset('css/carprofile.css') }}">
  

    <div style="margin-top:2%; margin-bottom:100px;">
        <div class="row">
            <div class="col">
                <div class="regular slider">
                    <div>
                        <img src="{{ asset('images/cars1.jpg') }}">
                    </div>
                    <div>
                        <img src="{{ asset('images/cars2.jpg') }}">
                    </div>
                    <div>
                        <img src="{{ asset('images/cars3.jpg') }}">
                    </div>
                    <div>
                        <img src="{{ asset('images/cars4.jpg') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7" style="margin-left: 5%; font-size: 12pt; ">
            
                <div class="row" >
                    <div class="col" id="Ten-xe">TOYOTA INNOVA E 2020</div>
                </div>

                <div class="row">
                    <div class="col">
                        <script>
                            rating(0)         
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
                        <span>Có 0 chuyến</span>
                    </div>
                    
                </div>

                <div class="row" style="margin-top: 3%">
                    <div class="col">
                        <span id="card-tag">Số tự động</span>
                        <span id="card-tag">Giao xe tận nơi</span>
                    </div>
                </div>
                <div class="row" style="padding:5%" >
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left"> ĐẶC DIỂM</span>
                       
                    </div>
                    <div class="col-sm-9" >
                        <div   class="row" >
                            <div class="col-sm-5">
                                <img src="{{url("images/icon-chair.png")}}"  class="icon" >
                                <span id="text-icon"> Số ghế: 7</span>
                            </div>
                            <div class="col-sm-7">
                                <img src="{{url("images/icon-trans.png")}}"  style="width: 45px" >
                                <span id="text-icon"> Truyền động: Số Sàn</span>
                            </div>
                  

                        </div>
                       
                    </div>
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
               
                       
                    </div>
                    <div class="col-sm-9" >
                        <div   class="row" >
                            <div class="col-sm-5">
                                <img src="{{url("images/icon-diesel.png")}}"  style="width: 30px" >
                                <span id="text-icon">Nhiên liệu: Xăng</span>
                            </div>
                        </div>
                       
                    </div>
                </div>


               

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left"> MÔ TẢ</span>
                    </div>
                    <div lass="col-sm-9" >
                        <div   class="row" >
                            <div class="col">
                                <SPan>Xe inonova số sàn đăng ký tháng 11/2020</SPan>
                            </div>
                        </div>
                       
                    </div>
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left">TÍNH NĂNG</span>
                       
                    </div>
                    <div lass="col-sm-9" >
                        <div   class="row" >
                            <div class="col-sm-5">
                                <i class="fa fa-bluetooth" style="font-size: 17pt"></i>
                                <span id="text-icon"> Bluetooth</span>
                            </div>
                            <div class="col-sm-7">
                                <i class="fa fa-usb" style="font-size: 17pt"></i>
                                <span id="text-icon"> Khe cắm USB</span>
                            </div>
                            <div class="col-sm-5" style="margin-top:3%">
                                <img class="img-ico" src="{{url("images/reverse_camera.png")}}"  style="width: 20px; height: 20px; margin-right: 10px;">
                                <span id="text-icon"> Camera lùi</span>
                            </div>
                            <div class="col-sm-7" style="margin-top:3%">
                                <img class="img-ico" src="{{url("images/gps.png")}}"  style="width: 20px; height: 20px; margin-right: 10px;">
                                <span id="text-icon"> GPS</span>
                            </div>
                            

                        </div>
                       
                    </div>
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left"> GIẤY TỜ THUÊ XE (BẢN GỐC)</span>
                       
                    </div>
                    <div class="col-sm-9" >
                        <div   class="row" >
                            <div class="col-sm-5">
                                <img class="img-ico" src="{{url("images/cmnd.png")}}"  style="width: 20px; height: 20px; margin-right: 10px;">
                                <span id="text-icon"> CMND và GPLX (đối chiếu)</span>
                            </div>
                           
                  

                        </div>
                       
                    </div>
                </div>

              
                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left"> TÀI SẢN THẾ CHẤP</span>
                    </div>
                    <div class="col-sm-9" >
                        <span > 15 triệu (tiền mặt/chuyển khoản cho chủ xe khi nhận xe)
                            hoặc Xe máy (kèm cà vẹt gốc) giá trị 15 triệu
                        </span>
                     </div>
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left">ĐIỀU KHOẢN</span>
                    </div>
                    <div class="col-sm-9" >
                        <span > 1. Chấp nhận Hộ khẩu Thành phố/KT3 Thành phố/Hộ khẩu tỉnh/Passport (Bản gốc) (Giữ lại khi nhận xe)
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
                            Khi trả xe, khách hàng vui lòng vệ sinh sạch sẽ hoặc gửi phụ thu thêm phí rửa xe, hút bụi nếu xe dơ. (sẽ thu nhiều hơn tuỳ theo mức độ dơ) 
                            Trân trọng cảm ơn, chúc quý khách có những chuyến đi tuyệt vời!
                        </span>
                     </div>
                    
                </div>

                <div class="row" style="margin-top: 3%;" >
                    <div class="col-sm-3" >
                       <span id="title-left"> Chủ xe</span>
                    </div>
                    <div class="col-sm-9" >
                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{url("images/avatar.png")}}" style="width: 80px; background-size: cover;" class="rounded-circle">
                            </div>
                            <div class="col-sm-8">
                                <span style="font-weight: bold">Lê Nguyễn Thành Nhân</span>
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


            <div class="col-sm-4" >
                <div class="card card-rental">
                    <div class="card-body scrollbar-grey" style=" overflow-y: auto;">
                        <div class="row">
                            <div class="col" style="text-align: center">
                                <span id="price">880K</span>
                                <span style=" font-size: 12pt;font-weight: bold;">/ngày</span>
                            </div>
                        </div>

                        <span id="start-end-day">
                            Ngày bắt đầu
                        </span>
                        <br>
                        <div class="row" style="margin-top: 3%">
                            <div class="col-sm-7">
                                <input name="checkin" type="text" class="form-control" id="inputCheckIn"
                                    placeholder="Bắt đầu">
                            </div>
                            <div class="col-sm-5">
                                <select name="hourstart" class="form-control tm-select" id="children1">
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
                                <input name="checkin" type="text" class="form-control" id="inputCheckOut"
                                    placeholder="Bắt đầu">
                            </div>
                            <div class="col-sm-5">
                                <select name="hourend" class="form-control tm-select" id="children1">
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
                                <span style="margin-left:2%">Thời gian nhận xe</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span>06:00-23:30</span>
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
                                <span style="font-size: 12pt;">Xã Châu Hưng, Huyện Bình Đại</span>
                            </div>
                        </div>
                        <br>
                        <span id="start-end-day">
                            Giới hạn km
                        </span>
                        <br>
                        <div class="row" style="margin-top: 3%; ">
                            <div class="col">
                                <span style="font-size: 12pt;">Tối đa <span style="font-weight: bold;">300</span>km/ngày.
                                    Phí <span style="font-weight: bold;">5K</span>/km vượt giới hạn.</span>
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
                                <span>880 000 / ngày</span>
                            </div>
                        </div>
                        <div class="row" id="gia-thue">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Phí dịch vụ</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span>61 600 / ngày</span>
                            </div>
                        </div>
                        
                        <div class="row" >
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row" id="gia-thue1">
                            <div class="col-sm-6">
                                <span style="margin-left:2%">Tổng phí thuê xe</span>
                            </div>
                            <div class="col-sm-6" style="text-align: right">
                                <span>941 600 x <span id="days" style="font-weight: bold">1</span> <span style="font-weight: bold">ngày</span>  </span>
                            </div>
                        </div>
                        <div class="row" >
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                        <div class="row" id="gia-thue2">
                            <div class="col-sm-7">
                                <span style="margin-left:2%">Tổng cộng</span>
                            </div>
                            <div class="col-sm-5" style="text-align: right">
                                <span>941 600 </span>
                                <span>đ</span>
                            </div>
                        </div>
                        <div class="row" style="margin: 5% 0%; " >
                            <div class="col-sm-12"  >
                                <input type="submit" style="padding:10px ; font-weight: bold; " class="form-control btn btn-success" value="ĐẶT XE">
                            </div>
                        </div>
                        


                    </div>
                </div>
            </div>



    </div>


       


        <script src="{{ asset('script/map.js') }}"></script>
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

    @endsection
