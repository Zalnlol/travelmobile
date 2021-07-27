<link rel="stylesheet" type="text/css" href="{{ asset('css/cardcar.css') }}">

<div class="card " style="height:550px">
    <div class="card-body scrollbar-grey" style=" overflow-y: auto;">
        <div class="row" id="danhsachxe">
            {{-- {{dd($danhsachxe)}} --}}
            @foreach ($danhsachxe as $chiecxe)

                
                    <div class="col-lg-6" style="margin-top: 20px">
                        <a href="{{ url('/searchcar/profile?car_id='.$chiecxe->car_id.'&city='.$searchinfo['city'].'&lat='.$searchinfo['lat'].'&lng='.$searchinfo['lat'].'&checkin='.$searchinfo['checkin'].'&hourstart='.$searchinfo['hourstart'].'&checkout='.$searchinfo['checkout'].'&hourend='.$searchinfo['hourend']) }}" style="color:black">
                            <div class="card">
                                <img src="{{ asset(''.$chiecxe->car_image) }}" class="card-img-top" alt="Card image cap">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <span id="titleCard">{{$chiecxe->name}}</span>
                                        </div>

                                        <div class="col-sm-4" style="text-align: right">
                                            <span id="cardPrice">{{$chiecxe->rent_price}}</span>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 3%">
                                        <div class="col-sm-5">
                                            <script>
                                                star = {!! json_encode($chiecxe->star_num, JSON_HEX_TAG) !!};
                                                rating(star)         
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
                                            
                                        </div>
                                        <div class="col-sm-7">
                                            • {{$chiecxe->trip_number}}  chuyến 
                                        </div>
                                    </div>
                                    <br>
                        
                            
                                    @if ($chiecxe->auto==1)
                                        <span id="card-tag">Số tự động</span>
                                    @else
                                        <span id="card-tag">Số sàn</span>
                                        
                                    @endif
                                    

                                    <span id="card-tag">Giao xe tận nơi</span>
                                    <br>
                                    <br>

                                    <div class="row">
                                        <div class="col">
                                            <i class="fa fa-map-marker" id="checker"></i>
                                            <span style="font-size: 10pt"> {{$chiecxe->address}}</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
            
            @endforeach

          

       
        </div>

        <aside class="Map-List">
            <button id="map" onclick="return mapclick()">
                <i class="fa fa-map"></i>
                <span style="font-weight: bold;font-size:12pt;"> Bản đồ</span> 
            </button>
        </aside>

    </div>

    <script>
        //   function rating(number) {
        //     for (i = 0; i < 5; i++) {
        //         if (i <= number) {
        //             document.write('<i class="fa fa-star fa-1x" id="checker" ></i>')
        //         } else {
        //             document.write('<i class="fa fa-star fa-1x"></i>')
        //         }
        //     }

        // }
    </script>


</div>
