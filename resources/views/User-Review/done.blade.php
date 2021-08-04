@extends('layoutUser.layout')
@section('titleweb', 'Car Profile')
<script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8" type="text/javascript"></script>
@section('bodycode')
    <style>
        #thoi-gian1 {
            margin-left: 1%;
            font-size: 12pt;
            background-color: #f8ede4;
            width: 98%;
        }

    </style>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/carprofile.css') }}">


    <section class="content-item" id="comments" style="margin-top: 130px">
        <div class="container">   
            <div class="row">
                <div class="col-sm-8">   
                    <form action="#" method="" enctype="multipart/form-data">
                        @csrf
                        <h3 class="pull-left">Bạn đã đánh giá rồi</h3>
                        <button type="submit" class="btn btn-normal pull-right">Phản hồi</button>
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-3 col-lg-2 hidden-xs">
                                    <img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" style="width: 100px">                    
                                </div>
                                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                    <input type="hidden" name="contract_id" value="">
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="car_id" value="">
                                    <textarea class="form-control" id="message" name="comment" placeholder="Your message" ></textarea>
                                    <div id="rating" class="star-rating">
                                        <input type="radio" id="star5" name="star_num" value="5" />
                                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                     
                                        <input type="radio" id="star4" name="star_num" value="4" />
                                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                     
                                        <input type="radio" id="star3" name="star_num" value="3" />
                                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                                     
                                        <input type="radio" id="star2" name="star_num" value="2" />
                                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                     
                                        <input type="radio" id="star1" name="star_num" value="1" />
                                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                    </div>

                                </div>
                            </div>  	
                        </fieldset>
                    </form>
                                                                
                </div>
            </div>
        </div>
       
    </section>
    




    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

    <script src="{{ asset('script/carprofile.js') }}"></script>

   <style type="text/css">


/* div,label{margin:0;padding:0;}
body{margin:20px;}
h1{font-size:1.5em;margin:10px;}
/****** Style Star Rating Widget *****/
#rating{border:none;float:left;}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover, 
#rating:not(:checked)>label:hover~label{color:#2E7093;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:#2E7093;} */

.rate {
float: left;
height: 46px;
padding: 0 10px;
}
.rate:not(:checked) > input {
position:absolute;
top:-9999px;
}
.rate:not(:checked) > label {
float:right;
width:1em;
overflow:hidden;
white-space:nowrap;
cursor:pointer;
font-size:30px;
color:#ccc;
}
.rate:not(:checked) > label:before {
content: '★ ';
}
.rate > input:checked ~ label {
color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */

.content-item {
    padding:30px 0;
    background-color:#FFFFFF;
}

.content-item.grey {
    background-color:#F0F0F0;
    padding:50px 0;
    height:100%;
}

.content-item h2 {
    font-weight:700;
    font-size:35px;
    line-height:45px;
    text-transform:uppercase;
    margin:20px 0;
}

.content-item h3 {
    font-weight:400;
    font-size:20px;
    color:#555555;
    margin:10px 0 15px;
    padding:0;
}

.content-headline {
    height:1px;
    text-align:center;
    margin:20px 0 70px;
}

.content-headline h2 {
    background-color:#FFFFFF;
    display:inline-block;
    margin:-20px auto 0;
    padding:0 20px;
}

.grey .content-headline h2 {
    background-color:#F0F0F0;
}

.content-headline h3 {
    font-size:14px;
    color:#AAAAAA;
    display:block;
}


#comments {
    box-shadow: 0 -1px 6px 1px rgba(0,0,0,0.1);
    background-color:#FFFFFF;
}

#comments form {
    margin-bottom:30px;
}

#comments .btn {
    margin-top:7px;
}

#comments form fieldset {
    clear:both;
}

#comments form textarea {
    height:100px;
}

#comments .media {
    border-top:1px dashed #DDDDDD;
    padding:20px 0;
    margin:0;
}

#comments .media > .pull-left {
    margin-right:20px;
}

#comments .media img {
    max-width:100px;
}

#comments .media h4 {
    margin:0 0 10px;
}

#comments .media h4 span {
    font-size:14px;
    float:right;
    color:#999999;
}

#comments .media p {
    margin-bottom:15px;
    text-align:justify;
}

#comments .media-detail {
    margin:0;
}

#comments .media-detail li {
    color:#AAAAAA;
    font-size:12px;
    padding-right: 10px;
    font-weight:600;
}

#comments .media-detail a:hover {
    text-decoration:underline;
}

#comments .media-detail li:last-child {
    padding-right:0;
}

#comments .media-detail li i {
    color:#666666;
    font-size:15px;
    margin-right:10px;
}

</style>
        
        <script type="text/javascript">
        
        </script>
@endsection