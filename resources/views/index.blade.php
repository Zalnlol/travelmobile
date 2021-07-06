<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('travelmobile-css/travelmobile.css') }}"> <!--custom project css-->
    <!-- Template 2095 Level -->
    <!-- http://www.tooplate.com/view/2095-level -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet"> <!--Font logo-->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tooplate-style.css') }}">
    <title>Travel Mobile</title>
</head>
<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <div class="tm-top-bar" id="tm-top-bar">
            <!-- Top Navbar -->
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg narbar-light">
                        <a class="navbar-brand mr-auto" href="#" id="logo">
                            <img src="images/travel-mobile-logo.png" alt="Site logo">
                            Travel Mobile
                        </a>
                        <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                            <ul class="navbar-nav ml-auto">
                              <li class="nav-item">
                                <a class="nav-link" href="#top">Trang chủ <span class="sr-only">(current)</span></a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#tm-section-4">Hướng dẫn</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#tm-section-5">Đăng nhập</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#tm-section-6">Đăng ký</a>
                              </li>
                            </ul>
                        </div>                            
                    </nav>            
                </div>
            </div>
        </div>

        <div class="tm-section tm-bg-img" id="tm-section-1">
            <div class="tm-bg-white ie-container-width-fix-2">
                <div class="container ie-h-align-center-fix">
                    <div class="row">
                        <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                            <form action="index.html" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-100">
                                        <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                        <input name="city" type="text" class="form-control" id="inputCity" placeholder="Nhập thành phố, quận, địa chỉ...">
                                    </div>
                                </div>
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-element tm-form-element-2">
                                        <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                        <input name="check-in" type="text" class="form-control" id="inputCheckIn" placeholder="Bắt đầu">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">                                            
                                        <select name="hour-option" class="form-control tm-select" id="children">
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
                                        <input name="check-out" type="text" class="form-control" id="inputCheckOut" placeholder="Kết thúc">
                                    </div>
                                    <div class="form-group tm-form-element tm-form-element-2">                                            
                                        <select name="hour-option" class="form-control tm-select" id="children">
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
                                <img src="images/img-01.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Nunc in felis aliquet metus luctus iaculis</h3></header>
                                    <p>Aliquam ac lacus volutpat, dictum risus at, scelerisque nulla. Nullam sollicitudin at augue venenatis eleifend. Nulla ligula ligula, egestas sit amet viverra id, iaculis sit amet ligula.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">Get More Info.</a>
                                </div>                                
                            </article>                    
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/img-02.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Sed cursus dictum nunc quis molestie</h3></header>
                                    <p>Pellentesque quis dui sit amet purus scelerisque eleifend sed ut eros. Morbi viverra blandit massa in varius. Sed nec ex eu ex tincidunt iaculis. Curabitur eget turpis gravida.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">View Detail</a>
                                </div>                                
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/img-01.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Eget diam pellentesque interdum ut porta</h3></header>
                                    <p>Aenean finibus tempor nulla, et maximus nibh dapibus ac. Duis consequat sed sapien venenatis consequat. Aliquam ac lacus volutpat, dictum risus at, scelerisque nulla.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">More Info.</a>
                                </div>                                
                            </article>
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/img-02.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Lorem ipsum dolor sit amet, consectetur</h3></header>
                                    <p>Suspendisse molestie sed dui eget faucibus. Duis accumsan sagittis tortor in ultrices. Praesent tortor ante, fringilla ac nibh porttitor, fermentum commodo nulla.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">Detail Info.</a>
                                </div>                                
                            </article>                    
                            <article class="tm-bg-white mr-2 tm-carousel-item">
                                <img src="images/img-01.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Orci varius natoque penatibus et</h3></header>
                                    <p>Pellentesque quis dui sit amet purus scelerisque eleifend sed ut eros. Morbi viverra blandit massa in varius. Sed nec ex eu ex tincidunt iaculis. Curabitur eget turpis gravida.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">Read More</a>
                                </div>                                
                            </article>
                            <article class="tm-bg-white tm-carousel-item">
                                <img src="images/img-02.jpg" alt="Image" class="img-fluid">
                                <div class="tm-article-pad">
                                    <header><h3 class="text-uppercase tm-article-title-2">Nullam sollicitudin at augue venenatis eleifend</h3></header>
                                    <p>Aenean finibus tempor nulla, et maximus nibh dapibus ac. Duis consequat sed sapien venenatis consequat. Aliquam ac lacus volutpat, dictum risus at, scelerisque nulla.</p>
                                    <a href="#" class="text-uppercase btn-primary tm-btn-primary">More Details</a>
                                </div>                                
                            </article>
                        </div>    
                    </div>
                </div>
            </div>
        </div>




        <footer class="tm-bg-dark-blue">
            <div class="container">
                <div class="row">
                    <p class="col-sm-12 text-center tm-font-light tm-color-white p-4 tm-margin-b-0">
                    Copyright &copy; <span class="tm-current-year">2021</span> Travel Mobile
                    - Design: Tooplate</p>        
                </div>
            </div>                
        </footer>
    </div>

    <!-- load JS files -->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="{{ asset('js/popper.min.js') }}"></script>                    <!-- https://popper.js.org/ -->       
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="{{ asset('js/datepicker.min.js') }}"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="{{ asset('js/jquery.singlePageNav.min.js') }}"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="{{ asset('slick/slick.min.js') }}"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script>
        function setCarousel() {
                
            if ($('.tm-article-carousel').hasClass('slick-initialized')) {
                $('.tm-article-carousel').slick('destroy');
            } 

            if($(window).width() < 438){
                // Slick carousel
                $('.tm-article-carousel').slick({
                    infinite: false,
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            }
            else {
             $('.tm-article-carousel').slick({
                    infinite: false,
                    dots: true,
                    slidesToShow: 3,
                    slidesToScroll: 1
                });   
            }
        }

        $(document).ready(function(){
            // Date Picker
            const pickerCheckIn = datepicker('#inputCheckIn');
            const pickerCheckOut = datepicker('#inputCheckOut');

            // Slick carousel
            setCarousel();
            setPageNav();
        })
    </script>
</body>
</html>