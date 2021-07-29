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
    <title>Thông báo</title>
</head>
<body>

    <button type="button" hidden id="btn" class="btn btn-primary" data-toggle="modal" data-target="#modelDN">
        Dang Nhap
    </button>


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

                    <span style="font-size: 13pt"> Bạn không được đặt xe của chính mình</span>
                </div>

                <br>
            </div>
            <div class="modal-footer">
                <a href="{{ route('homepage') }}">
                    <button type="button" class="btn btn-primary">Trở về trang chủ</button>
                </a>

            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btn').click()=true;

</script>
    
</body>
</html>