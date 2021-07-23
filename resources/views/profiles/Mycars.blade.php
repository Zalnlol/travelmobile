@extends('layoutUser.layout')
@section('titleweb', 'My cars')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mytrip.css') }}">
@section('bodycode')
    <div style="padding: 8% 0%; ">
        <div class="row" style="box-shadow: 0px 0px 20px rgb(233, 227, 227); height:auto">

            <div class="col-sm-3" style="text-align: right ; ">
                <a href="{{ url('/user/mycars') }}">
                    <span id="title-nav2" style="color: #2E7093; border-bottom: solid #2E7093; ">Danh sách xe</span>
                </a>
            </div>



            <div class="col-sm-2" style="text-align: left; margin-left:5% ">
                <a href="{{url('/user/mycars/triplist')}}">
                    <span id="title-nav2" >Danh sách chuyến</span>
                </a>
            </div>

            <div class="col-sm-3" style="text-align: left; margin-left:1% ">
                <a href="{{url('/user/mycars/register')}}">
                    <span id="title-nav2" >Đăng ký xe</span>
                </a>
            </div>

        </div>

        <div class="container" style="margin-top: 5%">
           



          



        </div>

    </div>
    </div>


    </div>



@endsection
