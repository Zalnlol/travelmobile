<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">                <!-- Font Awesome -->
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
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/nav-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer-user.css') }}">   

    <!--Google Map---->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8"></script>

    <title>@yield('titleweb')</title>
</head>
<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <div class="tm-top-bar" id="tm-top-bar">
            <!-- Top Navbar -->
            <div class="container-fluid">
                <div class="row">
            
                    
                @include('layoutUser.nav-bar')
                </div>
            </div>
        </div>

      <div class="body">
          @yield('bodycode')

      </div>


        @include('layoutUser.footer')
      
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

@yield('Script')


</body>
</html>