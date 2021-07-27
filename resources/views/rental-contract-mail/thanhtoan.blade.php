<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        body {
            background: rgb(210, 210, 210);
            background: linear-gradient(107deg, rgba(210, 210, 210, 1) 0%, rgba(233, 233, 233, 1) 46%, rgba(241, 244, 245, 1) 100%);
        }

    </style>
</head>

<body>
 
    <div class="row">
        <div class="col" style="text-align: center">
            <img src="{{ url('images/travel-mobile-logo.png') }}" style="width: 30%" alt="">
        </div>
    </div>


    <div  style="background: white; width:50%; padding:2%; margin-top:2%; margin-left:25%">
        <div class="row">
            <div class="col">
                <span>Xin chào, {{$datamail['name']}} !</span>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <span>Cảm ơn bạn đã đặt xe trên hệ thống của Travel Mobile. Chúng tôi đã nhận được khoản thanh toán cọc
                    của bạn cho dịch vụ thuê xe tự lái. Đơn hàng như sau </span>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-sm-2">
                <img src="{{ url('/'.$datamail['image']) }}" style="height:80px">
            </div>
            <div class="col">
                <div class="row">
                    <div class="col"><b>{{$datamail['carname']}}</b></div>
                </div>
                <div class="row">
                    <div class="col"><b> Ngày thuê</b> {{$datamail['start_date']}} giờ</div>
                    <div class="col"><b> Ngày trả</b> {{$datamail['end_date']}} giờ</div>
                </div>
                <div class="row">
                    <div class="col"><b>Thành tiền: </b> {{$datamail['rental_price']}}đ</div>
                    <div class="col"><b>Đặt cọc: </b> {{$datamail['deposit']}}đ</div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col"><b>Vui lòng giữ máy điện thoại, chủ xe của chúng tôi sẽ liên hệ để xác nhận với bạn trong
                    ít phút</b></div>
        </div>
        <hr>

        <div class="row">
            <div class="col"><i>Mọi thông tin thắc mắc xin vui lòng liên hệ cho chúng tôi theo địa chỉ</i></div>
        </div>


        <div class="row">
            <div class="col"><b>Địa chỉ:</b> <a href="https://goo.gl/maps/HNC3wxS3UBVQG8uT6"> 590 Cách Mạng Tháng Tám, phường 11, Quận 3, Thành phố Hồ Chí Minh</a></div>
            
        </div>


        <div class="row">
            <div class="col"><b>Số điện thoại:</b> <a href="tel:+0375515719"> 0375515719</a> </div>
        </div>
       
        <div class="row">
            <div class="col"><b>Website:</b><a href="http://localhost:8080/travelmobile/public/">http://localhost:8080/travelmobile/public/</a></div>
        </div>
        <div class="row">
            <div class="col"><b>Mail:</b> <a href="mailto:travelmobile@gmail.com">travelmobile@gmail.com</a></div>

            
        </div>
        
        
    </div>

</body>

</html>
