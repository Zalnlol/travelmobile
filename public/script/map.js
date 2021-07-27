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
        componentRestrictions: {
            country: "VN"
        }
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
                checktoado();

            })
            .catch(err => console.warn(err.message));
    });

}
// function check() {
//     let str = document.getElementById("search_input").value
//     if (str == "Sử dụng vị trí của bạn") {
//         gps()
//     }
// }


//calculate distance


//Add markert






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








function checktoado() {
    let str = document.getElementById("search_input").value
    if (str == "Sử dụng vị trí của bạn") {
        gps()
    }
    
  
   
}


function checksubmit(){

    diachi = document.getElementById('search_input').value;

    toado= ConvertAdd(diachi);
 
    lang=toado.lng;

     
    document.getElementById('lat').value=toado.lat
    document.getElementById('lng').value=lang
    
    document.getElementById('nutsubmit1').click() = true;
}









