function mapclick() {

    document.getElementById("listcard").style.display = "none";
    document.getElementById("listmap").style.display = "inline";
}
function listclick() {
    document.getElementById("listcard").style.display = "inline";
    document.getElementById("listmap").style.display = "none";

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

                document.getElementById('search_input').value = data.results[0].formatted_address;

            })
            .catch(err => console.warn(err.message));
    });

}
function check() {
    let str = document.getElementById("search_input").value
    if (str == "Sử dụng vị trí của bạn") {
        gps()
    }
}


//calculate distance


//Add markert


src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8&callback=initMap"
var map;

function initMap(maker, usermap) {
    map = new google.maps.Map(document.getElementById('mapmap'), {
        center: {
            lat: usermap.lat,
            lng: usermap.lng
        },
        zoom: 15
    });
    maker.forEach(element => {
        addMarker(element);


        // let user= [{lat: 10.7834572, lng: 106.6910613}]

        // if(  ((user[0].lat-0.00855036 <= element.lat)&&(user[0].lng+0.00855036 >=element.lng)   &&(user[0].lat >= element.lat) &&(user[0].lat <= element.lng))                   ||                 
        //      ((user[0].lat+0.00855036 >= element.lat)&&(user[0].lng+0.00855036 >=element.lng)   &&(user[0].lat <= element.lat) &&(user[0].lat <= element.lng))                 ||        
        //      ((user[0].lat-0.00855036 <= element.lat)&&(user[0].lng-0.00855036 <=element.lng)   &&(user[0].lat >= element.lat) &&(user[0].lat >= element.lng))                    || 
        //      ((user[0].lat+0.00855036 >= element.lat)&&(user[0].lng-0.00855036 <=element.lng))  &&(user[0].lat <= element.lat) &&(user[0].lat >= element.lng) ){
        //     // console.log(element)
        // }


    });

    //add marker function
    function addMarker(coords) {

        var marker1 = new google.maps.Marker({
            position: coords,
            map: map

        });
    }


}




function ScanWithinRadius(maker, usermap,radius) {

    let xe =[];
    let i=0;
    bk=0.000855036*radius
    maker.forEach(element => {
        if(  ((usermap.lat-bk <= element.lat)&&(usermap.lng+bk >=element.lng)   &&(usermap.lat >= element.lat) &&(usermap.lat <= element.lng))                 ||                 
             ((usermap.lat+bk >= element.lat)&&(usermap.lng+bk >=element.lng)   &&(usermap.lat <= element.lat) &&(usermap.lat <= element.lng))                 ||        
             ((usermap.lat-bk <= element.lat)&&(usermap.lng-bk <=element.lng)   &&(usermap.lat >= element.lat) &&(usermap.lat >= element.lng))                 || 
             ((usermap.lat+bk >= element.lat)&&(usermap.lng-bk <=element.lng))  &&(usermap.lat <= element.lat) &&(usermap.lat >= element.lng) )
             {
            console.log(element);
                xe[i]=element;
                i+=1;

        }


    });
    return xe
}
function rating(number) {
    for (i = 1; i <= 5; i++) {
        if (i <= number) {
            document.write('<i class="fa fa-star fa-1x" id="checker" ></i>')
        } else {
            document.write('<i class="fa fa-star fa-1x"></i>')
        }
    }

}


function ConvertAdd(address) {
    const KEY = "AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8";
    let url = `https://maps.googleapis.com/maps/api/geocode/json?address=${address}&key=${KEY}`;

    var request = new XMLHttpRequest();
    request.open('GET', url, false);  // `false` makes the request synchronous
    request.send(null);

    if (request.status === 200) {// That's HTTP for 'ok'
        loc = JSON.parse(request.responseText);
        return loc.results[0].geometry.location
    }
}

function filter(carlist,address,Carimage,path)



function display12(carlist,address,Carimage,path){

   let s='';
    carlist.forEach(element=>{
        address.forEach(addresscar =>{
            Carimage.forEach(imagecar =>{
                if( (element['lat']==addresscar['lat']) && (element['lng']==addresscar['lng']) && (element['car_id']==imagecar['car_id'])){
                    console.log('Nhan');
                
                
                  s+=  `<div class="col-lg-6" style="margin-top: 20px">
                                <div class="card">
                                    <img src="`+path+imagecar['image']+`" class="card-img-top" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <span id="titleCard">`+element['name']+`</span>
                                            </div>
                            
                                            <div class="col-sm-4" style="text-align: right">
                                                <span id="cardPrice">`+element['rent_price']+`</span>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 3%">
                                            <div class="col-sm-5">
                                                <script>
                                                    rating(4)
                            
                                                    
                                                </script>
                                            </div>
                                            <div class="col-sm-7">
                                                • 3 chuyến ~ 10km
                                            </div>
                                        </div>
                                        <br>
                            
                                        <span id="card-tag">Số tự động</span>
                                        <span id="card-tag">Giao xe tận nơi</span>
                                        <br>
                                        <br>
                            
                                        <div class="row">
                                            <div class="col">
                                                <i class="fa fa-map-marker" id="checker"></i>
                                                <span style="font-size: 10pt"> `+element['address']+`</span>
                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>`


                      document.getElementById('danhsachxe').innerHTML="";
                      document.getElementById('danhsachxe').innerHTML=s;    
                                
                }

            });
        });
    });

}






