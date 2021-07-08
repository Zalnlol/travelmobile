<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tooplate-style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>Đăng ký</title>
    </head>
    <body id="body">
        <div id="login-card" class="card">
            <div class="card-body">
            <h2 class="text-center">Đăng ký tài khoản</h2>
            <br>
                <form action="/action_page.php">
                    <div class="form-group">
                        <input type="email" class="form-control" id="txt-fullname" placeholder="Họ tên" name="fullname">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="txt-email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="txt-password" placeholder="Mật khẩu" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="txt-password" placeholder="Nhập lại mật khẩu" name="password">
                    </div>
                    
                        <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Đăng ký</button>
                        <button type="cancel" id="button" class="btn btn-primary deep-purple btn-block ">Hủy</button>
                    <hr>
                    <br>
                    <div id="btn" class="text-center">
                        Hoặc đăng nhập bằng tài khoản
                        <button type="button" class="btn btn-primary btn-circle btn-sm"><i class="fa fa-facebook"></i></button>
                        <button type="button" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-google"></i></button>
                    </div>
                </form>
            </div>
        <div>
    </body>
</html>