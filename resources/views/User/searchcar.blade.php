@extends('layoutUser.layout')
@section('titleweb', 'Search Cars')


    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">

@section('bodycode')


    <div class="main-body container">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-body ">
                        <form action="{{ url('/searchcar') }}">
                            <div class="row">
                                <div class="col">
                                    <span class="tile-search1">Địa điểm</span>
                                    <input type="text" name="city" id="search_input" list="geoname"
                                        onchange="return checktoado()" placeholder="Nhập thành phố, quận, địa chỉ..."
                                        value="{{ $searchinfo['city'] }}">
                                    <datalist id="geoname">
                                        <option>
                                            Sử dụng vị trí của bạn
                                        </option>
                                    </datalist>
                                    <input type="text" name="lat" id="lat" value="{{ $searchinfo['lat'] }}" hidden>
                                    <input type="text" name="lng" id="lng" value="{{ $searchinfo['lng'] }}" hidden>
                                </div>

                                <div class="col">
                                    <span class="tile-search1">Bắt đầu</span>

                                    <input type="text" style="border: none; width: 6.5rem ;"
                                        value="{{ $searchinfo['checkin'] }}" id="inputCheckIn" name="checkin">
                                    <select name="hourstart" style="border: none;" id="hourstart">
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

                                </div>

                                <div class="col">
                                    <span class="tile-search1">Kết thúc</span>

                                    <input type="text" style="border: none; width: 6.5rem ;" id="inputCheckOut"
                                        name="checkout" value="{{ $searchinfo['checkout'] }}">
                                    <select name="hourend" style="border: none;" id="hourend">
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

                                </div>



                                <div class="col-lg-2">
                                    <input type="submit" name="sb" id="sb" value="Áp dụng">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-4">
                <div>
                    <x-searchbox :hangxe="$hangxe" :searchinfo="$searchinfo"></x-searchbox>
                </div>
            </div>
            <div class="col-sm-8">
                <div id="listcard">
                    <x-carlist :danhsachxe1="$listcardiplay"></x-carlist>
                </div>
                <div id="listmap" style="display: none">
                    <x-searchmap></x-searchmap>
                </div>
            </div>
        </div>
        <div style="height: 50px"></div>


    </div>



    <script src="{{ asset('script/map.js') }}"></script>
    <script>
        let carlist = {!! json_encode($idmap, JSON_HEX_TAG) !!};
        let searchinfo = {!! json_encode($searchinfo, JSON_HEX_TAG) !!};

        let usermpid = {};
        usermpid['lat'] = searchinfo['lat']
        usermpid['lng'] = searchinfo['lng'];


        document.getElementById('hourstart').value = searchinfo['hourstart'];
        document.getElementById('hourend').value = searchinfo['hourend'];
        initMap(carlist, usermpid);


        src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8&callback=initMap"
        var map;

        function initMap(maker, usermap) {

            maker.forEach(element => {
                element.lat = parseFloat(element.lat, 10);
                element.lng = parseFloat(element.lng, 10);
            });
            usermap.lat = parseFloat(usermap.lat, 10);
            usermap.lng = parseFloat(usermap.lng, 10);

            map = new google.maps.Map(document.getElementById('mapmap'), {
                center: {
                    lat: usermap.lat,
                    lng: usermap.lng
                },
                zoom: 15
            });
            maker.forEach(element => {

                addMarker(element);

            });

            //add marker function
            function addMarker(coords) {

                var marker1 = new google.maps.Marker({
                    position: coords,
                    map: map

                });
            }


        }

        function GetURLParameter(sParam) {
            var sPageURL = window.location.search.substring(1);
            var sURLVariables = sPageURL.split('&');
            for (var i = 0; i < sURLVariables.length; i++) {
                var sParameterName = sURLVariables[i].split('=');
                if (sParameterName[0] == sParam) {
                    return sParameterName[1];
                }
            }
        }

        if(GetURLParameter('phamvi')!=undefined){
            document.getElementById('phamvi').value = GetURLParameter('phamvi');
            document.getElementById('min').value = GetURLParameter('min');
            document.getElementById('max').value = GetURLParameter('max');
            document.getElementById('brand').value = GetURLParameter('brand');
            document.getElementById('auto').value = GetURLParameter('auto');

            if(GetURLParameter('4cho')==0){
                document.getElementById('4cho').value=1;
                checkcars1();
            }else{
                document.getElementById('4cho').value=0; 
                checkcars1();
            }


            if(GetURLParameter('7cho')==0){
                document.getElementById('7cho').value=1;
                checkcars2();
            }else{
                document.getElementById('7cho').value=0; 
                checkcars2();
            }


            if(GetURLParameter('bantai')==0){
                document.getElementById('bantai').value=1;
                checkcars3();
            }else{
                document.getElementById('bantai').value=0; 
                checkcars3();
            }

        }
    </script>









@endsection
