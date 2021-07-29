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
    if(songay==0){
        songay=1;
    }
    return songay;

}
function xulyngay(day,hour){
    timestart = day + '  ' + hour + ':00:00';
    var ngaybatdau = new Date(timestart);

    date = ngaybatdau.getFullYear()+'-'+(ngaybatdau.getMonth()+1)+'-'+ngaybatdau.getDate()+' '+ngaybatdau.getHours()+":"+ngaybatdau.getMinutes()+":"+ngaybatdau.getSeconds();
    return date

}

function tinhtien() {
    songay = tinhngay();
    document.getElementById('days').innerText = songay;
    phigiaoxe = parseInt(document.getElementById('giaoxe').innerText)
    document.getElementById('tongphithuexe').innerText = ((dongiathue + phidichvu) * songay )+ phigiaoxe;
    document.getElementById('datcoc').innerText = Math.round(((dongiathue + phidichvu) * songay + phigiaoxe) * 0.3);
    complatedata()
}

function ktcheck() {
    if (document.getElementById('checkgiaoxe').checked) {
        document.getElementById('giaoxe').innerText = '30000'
        document.getElementById('diadiemgiaoxe').innerText=searchinfo['city']
    } else {
        document.getElementById('giaoxe').innerText = '0'
        document.getElementById('diadiemgiaoxe').innerText=carlist['address']

    }
    tinhtien();
    complatedata();
}

function complatedata(){

    checkin = document.getElementById('inputCheckIn').value
    hourstart = document.getElementById('hourstart').value
    checkout = document.getElementById('inputCheckOut').value
    hourend = document.getElementById('hourend').value
    document.getElementById('user_id').value='';
    document.getElementById('car_id').value=carlist['car_id'];
    document.getElementById('car_id1').value=carlist['car_id'];
    document.getElementById('pickup_date').value=xulyngay(checkin,hourstart)
    document.getElementById('return_date').value=xulyngay(checkout,hourend)
    document.getElementById('rental_price').value= parseInt(document.getElementById('dongiathue').innerText) *parseInt(document.getElementById('days').innerText);
    document.getElementById('pickup_address').value= document.getElementById('diadiemgiaoxe').innerText ;
    document.getElementById('shipping_cost').value=document.getElementById('giaoxe').innerText ;
    document.getElementById('contract_value').value= document.getElementById('tongphithuexe').innerText
    document.getElementById('deposit').value= document.getElementById('datcoc').innerText
    document.getElementById('service_cost').value= document.getElementById('phidichvu').innerText
}


function giaonhanxe(){
    hourstart = document.getElementById('hourstart').value;
    hourend = document.getElementById('hourend').value;

    if(((hourstart>=5)&&(hourstart<=23))&&((hourend>=5)&&(hourend<=23))){
        document.getElementById('giaonhanxe').hidden=true;
        document.getElementById('nutao').disabled=false;

    }else{
        document.getElementById('nutao').disabled=true;
        document.getElementById('giaonhanxe').hidden=false;
    }

}

function kiemtrangay(){
    hientai =(new Date()).getTime();
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

    if((ngaybatdau -hientai <0)||(ngaykethuc- hientai<0)){

       
        document.getElementById('nutao').disabled=true;
        document.getElementById('thoigianquakhu').hidden=false;

    } else
    {
        
        document.getElementById('thoigianquakhu').hidden=true;
        document.getElementById('nutao').disabled=false;
    }


}


if (document.getElementById('checkgiaoxe').checked) {
    document.getElementById('giaoxe').innerText = '30000'
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
document.getElementById('tongphithuexe').innerText = ((dongiathue + phidichvu) * songay )+ phigiaoxe;
document.getElementById('datcoc').innerText = Math.round(((dongiathue + phidichvu) * songay + phigiaoxe) * 0.3);
complatedata();
giaonhanxe();
kiemtrangay();