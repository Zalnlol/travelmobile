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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>Login</title>
    </head>
    <body id="body">
        <div id="login-card" class="card">
            <div class="card-body">
            <h2 class="text-center">Đăng nhập</h2>
            <br>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="email" class="form-control" id="txt-email" placeholder="Nhập email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="txt-password" placeholder="Nhập mật khẩu" name="password">
                    </div>
                    <div class="text-right">
                        <a href="">Quên mật khẩu?</a>
                    </div>
                        <br>
                        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Xác nhận</button>
                        <br>
                    <div class="text-center">
                        Bạn chưa là thành viên? <a href="register">Hãy đăng kí ngay!</a>
                    </div>
                    <hr>
                    <br>

                    <div id="btn" class="text-center">
                        Hoặc đăng nhập bằng tài khoản
                        <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
                        <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
                        <button type="button" class="btn btn-info btn-circle btn-sm"><i class="fa fa-twitter"></i></button>
                    </div>
                </form>
            </div>
        <div>
    </body>
</html>