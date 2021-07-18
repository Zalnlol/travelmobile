@extends('layoutUser.layout')
@section('titleweb','Home Page')

    
@section('bodycode')


    
<div style="margin-top:5%">
        <div class="tm-section tm-bg-img" id="tm-section-1">
            <div class="tm-bg-white ie-container-width-fix-2">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            <form action="{{ url('/searchcar') }}" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                        <input name="city" type="text" class="form-control" id="search_input" list="geoname" onchange="return check()" placeholder="Nhập thành phố, quận, địa chỉ...">
                                        <datalist id="geoname">
                                            <option >
                                                Sử dụng vị trí của bạn
                                            </option>
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="checkin" type="text" class="form-control" id="inputCheckIn" placeholder="Bắt đầu">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">                                            
                                        <select name="hourstart" class="form-control tm-select" id="children">
                                            <option value="0">12:00 am</option>
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
                                        <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="checkout" type="text" class="form-control" id="inputCheckOut" placeholder="Kết thúc">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">                                            
                                        <select name="hourend" class="form-control tm-select" id="children">
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
                                        <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                    </div>
                                </div>
                                <div class="form-group tm-form-element tm-form-element-100">
                                    <button type="submit" class="btn btn-primary tm-btn-search">Tìm xe ngay</button>
                                </div>
                                <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                    <p class="tm-margin-b-0">Lựa thông tin trên để tìm kiếm xe phù hợp.</p>
                                </div>
                            </form>
                        </div>                        
                    </div>      
                </div>
            </div>                  
        </div>

        <div class="tm-section tm-section-pad tm-bg-gray" id="tm-section-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-article-carousel">                            
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-1.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Ít giấy tờ yêu cầu, thủ tục nhanh gọn</h3></header>
                                    <p>Passport, CMND và giấy phép lái xe</p>
                                </div>                                
                            </article>                    
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-2.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Hỗ trợ giao xe tận nhà, giao xe tại sân bay</h3></header>
                                    <p>Phí giao xe miễn phí hoặc thấp<p>
                                </div>                                
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-3.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Sử dụng các loại hình thanh toán như</h3></header>
                                    <p>ATM/VISA, cửa hàng tiện lợi, ví điện tử<p>
                                </div>                                
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-4.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Chọn lựa theo các dòng xe bao gồm</h3></header>
                                    <p>Sedan, Hatchback, Crossover, SUV, Pickup...<p>
                                </div>                                
                            </article>                    
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/features-5.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Vững tay lái với gói bảo hiểm từ </h3></header>
                                    <p>Bảo hiểm Quân Đội MIC, Petrolimex PJICO</p>
                                </div>                                
                            </article>
                            <article class="tm-bg-white tm-carousel-item">
                                <img src="images/features-6.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Không tính phí nếu hủy chuyến</h3></header>
                                    <p>Không tính phí nếu hủy chuyến<p>
                                </div>                                
                            </article>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div >       

    <script src="{{ asset('script/map.js') }}"></script>  
    
    @endsection


