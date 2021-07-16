@extends('layoutUser.layout')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@section('titleweb','Home Page')


    
@section('bodycode')
<label>Vui lòng chọn hãng xe</label>
<select name="hangxe" id="hangxe" class="form-control" onchange="return chiecxe()">
    <option value="0">Vui lòng chọn hãng xe</option>
    @foreach ($brands as $brand)
        <option value="{{ $brand->mfg_id }}">{{ $brand->name }}</option>
    @endforeach

</select>
<label>Vui lòng chọn xe</label>
<select name="chiecxe" id="chiecxe" class="form-control" disabled>
    <option >Vui lòng chọn mẫu xe</option>
</select>


<script>
    function chiecxe() {
        id = document.getElementById('hangxe').value;
        let xe = [];
        let i = 0;
        let car = {!! json_encode($cars->toArray(), JSON_HEX_TAG) !!};
        console.log(id);


        car.forEach(element => {
            if (element['mfg_id'] == id) {
                xe[i] = element['model'];
                i += 1;
            }

        });



        str = '';
        xe.forEach(element => {
            str += `<option value="` + element + `">` + element + `</option>`

        });
        if (id == '0') {
            hangxe = document.getElementById('chiecxe').disabled = true;
            hangxe = document.getElementById('chiecxe').innerHTML = `<option >Vui lòng chọn mẫu xe</option>`;
        } else {
            hangxe = document.getElementById('chiecxe').innerHTML = str;
            hangxe = document.getElementById('chiecxe').disabled = false;
        }

    }
</script>


@endsection



  


   

