<link rel="stylesheet" type="text/css" href="{{ asset('css/cardcar.css') }}">

<div class="card " style="height:550px">
    <div class="card-body">

        <div class="row">
            <div id="mapmap" style="width: 100%;height:550px"></div>
            <script>
                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('mapmap'), {
                        center: { lat: 14.058324, lng: 108.277199 },
                        zoom: 7
                    });
                    let maker = [{ lat: 10.7834572, lng: 106.6910613 }, 
                                 { lat: 10.7858632, lng: 106.6666391 },
                                 { lat: 10.7781302, lng: 106.6619303 },
                                 { lat: 10.794886,  lng: 106.7219853 },
                                 { lat: 10.9006306, lng: 106.8188882 },
                                 { lat: 10.2491577, lng: 106.4960513 },
                                 { lat: 10.7868348, lng: 106.6662743 },
                                ]
                    
                    
                    maker.forEach(element => {
                        addMarker(element );
        
                        let user= [{lat: 10.7834572, lng: 106.6910613}]
        
                        if(  ((user[0].lat-0.00855036 <= element.lat)&&(user[0].lng+0.00855036 >=element.lng)   &&(user[0].lat >= element.lat) &&(user[0].lat <= element.lng))                   ||                 
                             ((user[0].lat+0.00855036 >= element.lat)&&(user[0].lng+0.00855036 >=element.lng)   &&(user[0].lat <= element.lat) &&(user[0].lat <= element.lng))                 ||        
                             ((user[0].lat-0.00855036 <= element.lat)&&(user[0].lng-0.00855036 <=element.lng)   &&(user[0].lat >= element.lat) &&(user[0].lat >= element.lng))                    || 
                             ((user[0].lat+0.00855036 >= element.lat)&&(user[0].lng-0.00855036 <=element.lng))  &&(user[0].lat <= element.lat) &&(user[0].lat >= element.lng) ){
                            console.log(element)
                        }
        
                        
                    });
                    
                   
                   
        
                  
        
                    //add marker function
                    function addMarker(coords) {
                        var marker = new google.maps.Marker({
                            position: coords,
                            map: map
        
                        });
                    }
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8&callback=initMap"
                async defer></script>
        

        </div>
      

        <aside class="Map-List">
            <button id="map" onclick="return listclick()">
                <i class="fa fa-th-list"></i>
                <span style="font-weight: bold;font-size:12pt;"> Danh sách</span> 
            </button>
        </aside>

    </div>


</div>