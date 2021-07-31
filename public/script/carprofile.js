function tinhngay() {
    checkin = document.getElementById('inputCheckIn').value
    hourstart = document.getElementById('hourstart').value
    timestart = checkin + '  ' + hourstart + ':00:00';
    var ngaybatdau = new Date(timestart);
    ngaybatdau = ngaybatdau.getTime()

    checkout = document.getElementById('inputCheckOut').value
    hourend = document.getElementById('hourend').value
    timestart = checkout + '  ' + hourend + ':00:00';
    var ngaykethuc = new Date(timestart);
    ngaykethuc = ngaykethuc.getTime()

    songay = Math.ceil((ngaykethuc - ngaybatdau) / 86400000)
    if (songay == 0) {
        songay = 1;
    }
    return songay;

}
function xulyngay(day, hour) {
    timestart = day + '  ' + hour + ':00:00';
    var ngaybatdau = new Date(timestart);

    date = ngaybatdau.getFullYear() + '-' + (ngaybatdau.getMonth() + 1) + '-' + ngaybatdau.getDate() + ' ' + ngaybatdau.getHours() + ":" + ngaybatdau.getMinutes() + ":" + ngaybatdau.getSeconds();
    return date

}

function tinhtien() {
    songay = tinhngay();
    document.getElementById('days').innerText = songay;
    phigiaoxe = parseInt(document.getElementById('giaoxe').innerText)
    document.getElementById('tongphithuexe').innerText = ((dongiathue + phidichvu) * songay) + phigiaoxe;
    document.getElementById('datcoc').innerText = Math.round(((dongiathue + phidichvu) * songay + phigiaoxe) * 0.3);
    complatedata()
}


function complatedata() {

    checkin = document.getElementById('inputCheckIn').value
    hourstart = document.getElementById('hourstart').value
    checkout = document.getElementById('inputCheckOut').value
    hourend = document.getElementById('hourend').value
    document.getElementById('user_id').value = '';
    document.getElementById('car_id').value = carlist['car_id'];
    document.getElementById('car_id1').value = carlist['car_id'];
    document.getElementById('pickup_date').value = xulyngay(checkin, hourstart)
    document.getElementById('return_date').value = xulyngay(checkout, hourend)
    document.getElementById('rental_price').value = parseInt(document.getElementById('dongiathue').innerText) * parseInt(document.getElementById('days').innerText);
    document.getElementById('pickup_address').value = document.getElementById('diadiemgiaoxe').innerText;
    document.getElementById('shipping_cost').value = document.getElementById('giaoxe').innerText;
    document.getElementById('contract_value').value = document.getElementById('tongphithuexe').innerText
    document.getElementById('deposit').value = document.getElementById('datcoc').innerText
    document.getElementById('service_cost').value = document.getElementById('phidichvu').innerText
}


function giaonhanxe() {
    hourstart = document.getElementById('hourstart').value;
    hourend = document.getElementById('hourend').value;

    if (((hourstart >= 5) && (hourstart <= 23)) && ((hourend >= 5) && (hourend <= 23))) {
        
        document.getElementById('nutao').disabled =  false;
        document.getElementById('giaonhanxe').hidden = true;
        return 0;

    } else {
        document.getElementById('giaonhanxe').hidden = false;
        document.getElementById('nutao').disabled = true;
        return 1;
    }

}

function kiemtrangay() {
    hientai = (new Date()).getTime();
    // console.log($hientai);

    checkin = document.getElementById('inputCheckIn').value
    hourstart = document.getElementById('hourstart').value
    timestart = checkin + '  ' + hourstart + ':00:00';
    var ngaybatdau = new Date(timestart);
    ngaybatdau = ngaybatdau.getTime()

    checkout = document.getElementById('inputCheckOut').value
    hourend = document.getElementById('hourend').value
    timestart = checkout + '  ' + hourend + ':00:00';
    var ngaykethuc = new Date(timestart);
    ngaykethuc = ngaykethuc.getTime()

    if ((ngaybatdau - hientai < 0) || (ngaykethuc - hientai < 0)) {


        document.getElementById('nutao').disabled = true;
        document.getElementById('thoigianquakhu').hidden = false;
        return 1;

    } else {

        document.getElementById('thoigianquakhu').hidden = true;
        document.getElementById('nutao').disabled = false;
        return 0;
    }


}
src="https://maps.googleapis.com/maps/api/js?libraries=places&language=en&key=AIzaSyDi2UpnA_1qXGCGZmnqx-UegSOGAmIspD8"
var origin, destination, map;

// calculate distance , after finish send result to callback function
function calculateDistance(travel_mode, origin, destination) {
    var DistanceMatrixService = new google.maps.DistanceMatrixService();
    DistanceMatrixService.getDistanceMatrix(
        {
            origins: [origin],
            destinations: [destination],
            travelMode: google.maps.TravelMode[travel_mode],
            unitSystem: google.maps.UnitSystem.IMPERIAL, // miles and feet.
            // unitSystem: google.maps.UnitSystem.metric, // kilometers and meters.
            avoidHighways: false,
            avoidTolls: false
        }, save_results);
}
function save_results(response, status) {
    if (status != google.maps.DistanceMatrixStatus.OK) {
        $('#result').html(err);
    } else {
        var origin = response.originAddresses[0];
        var destination = response.destinationAddresses[0];
        if (response.rows[0].elements[0].status === "ZERO_RESULTS") {
            $('#result').html("Sorry , not available to use this travel mode between " + origin + " and " + destination);
        } else {
            var distance = response.rows[0].elements[0].distance;
            var duration = response.rows[0].elements[0].duration;
            var distance_in_kilo = distance.value / 1000; // the kilo meter
           

        }
    }

    km = distance_in_kilo + distance_in_kilo;
    bankinh= document.getElementById('bankinhgiao').innerText

    sokm= parseFloat(km) - parseInt(bankinh);

    // bankinhgiao
    if (sokm <=0){
        document.getElementById('giaoxe').innerText = '0'
    } else{
        sotienkm= document.getElementById('phigiaoxe').innerText
        sotien = parseInt(sotienkm) *sokm

        document.getElementById('giaoxe').innerText = sotien;
        document.getElementById('hienthikm').innerText= '('+sokm+'km)'
        
        tinhtien();
        complatedata();
        // sotien =

    }

    
}


function ktcheck() {
  
   
    if (document.getElementById('checkgiaoxe').checked) {
        
        var origin = carlist['address'];
        var destination = searchinfo['city'];
        var travel_mode = 'DRIVING';

       
        calculateDistance(travel_mode, origin, destination);


        // document.getElementById('giaoxe').innerText = '30000'
        document.getElementById('diadiemgiaoxe').innerText = searchinfo['city']
    } else {
        document.getElementById('giaoxe').innerText = '0'
        document.getElementById('diadiemgiaoxe').innerText = carlist['address']

    }
    tinhtien();
    complatedata();
}








document.getElementById('hourstart').value = searchinfo['hourstart'];
document.getElementById('hourend').value = searchinfo['hourend'];
document.getElementById('dongiathue').innerText = carlist['rent_price'] + '000';
dongiathue = parseInt(carlist['rent_price'] + '000');
document.getElementById('phidichvu').innerText = Math.round(dongiathue * 0.07);
phidichvu = Math.round(dongiathue * 0.07);
songay = tinhngay();
document.getElementById('tongcong').innerText = dongiathue + phidichvu;
document.getElementById('days').innerText = songay;
phigiaoxe = parseInt(document.getElementById('giaoxe').innerText)
document.getElementById('tongphithuexe').innerText = ((dongiathue + phidichvu) * songay) + phigiaoxe;
document.getElementById('datcoc').innerText = Math.round(((dongiathue + phidichvu) * songay + phigiaoxe) * 0.3);
complatedata();
giaonhanxe();
kiemtrangay();
ktcheck();