@extends('layoutUser.layout')
@section('titleweb','Search Cars')


<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/searchcar.css') }}">
    
@section('bodycode')
<div class="main-body container">
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-body " >
                <form action="">
                    <div class="row">
                        

                        <div class="col">
                            <span class="tile-search1" >Địa điểm</span>
                            <input type="text" name="city"id="search_input" list="geoname" onchange="return check()" placeholder="Nhập thành phố, quận, địa chỉ...">
                            <datalist id="geoname">
                                <option >
                                    Sử dụng vị trí của bạn
                                </option>
                            </datalist>
                        </div>

                        <div class="col">
                            <span class="tile-search1" >Bắt đầu</span>
                    
                            <input type="text" name="location " style="border: none; width: 6.5rem ;" value="Wed Jul 14 2021" id="inputCheckIn" >
                            <select name="hour-option"  style="border: none;">
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
                            <span class="tile-search1" >Kết thúc</span>
                    
                            <input type="text" name="location " style="border: none; width: 6.5rem ;" value="Wed Jul 14 2021" id="inputCheckOut" >
                            <select name="hour-option"  style="border: none;">
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
                            <input type="submit"   name="sb" id="sb" value="Áp dụng">
                        </div>
                    </div>
                    </form>
                </div>
            
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-4">
            <div >
                <x-searchbox></x-searchbox>
            </div>
        </div>
        <div class="col-sm-8">
            <div id="listcard" >
                <x-carlist></x-carlist>
            </div>
            <div id="listmap" style="display: none">
                <x-searchmap></x-searchmap>
            </div>
        </div>
    </div>
    <div style="height: 50px"></div>



</div>

    
<script>

    function mapclick(){

        document.getElementById("listcard").style.display="none";
        document.getElementById("listmap").style.display="inline";
    }
    function listclick(){
        document.getElementById("listcard").style.display="inline";
        document.getElementById("listmap").style.display="none";

    }

    var searchInput = 'search_input';

    $(document).ready(function () {
        var autocomplete;
        autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
            types: ['geocode'],
            /*componentRestrictions: {
                country: "USA"
            }*/
        });

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var near_place = autocomplete.getPlace();
        });
    });

  //   gps


  function gps() {
      navigator.geolocation.getCurrentPosition(function (location) {
          let LAT = location.coords.latitude
          let LNG = location.coords.longitude
          const KEY = "AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8";
          let url = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${LAT},${LNG}&key=${KEY}`;
          fetch(url)
              .then(response => response.json())
              .then(data => {
                  console.log(data);
                  let parts = data.results[0].address_components;
                  //   document.body.insertAdjacentHTML(
                  //     "beforeend",
                  //     `<p>Formatted: ${data.results[0].formatted_address}</p>`
                  //   );
                  document.getElementById('search_input').value = data.results[0].formatted_address;

              })
              .catch(err => console.warn(err.message));
      });

  }
  function check() {
      let str=document.getElementById("search_input").value
      if(str=="Sử dụng vị trí của bạn"){
          gps()
      }
  }



</script>


        @endsection


