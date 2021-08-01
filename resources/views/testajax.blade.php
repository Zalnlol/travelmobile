



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <form action="">
        {{-- chiecxe() --}}
    <label>Vui lòng chọn hãng xe</label>
<select name="hangxe" id="hangxe" class="form-control" onchange="return chiecxe1()">
    <option value="0">Vui lòng chọn hãng xe</option>
    @foreach ($brands as $brand)
        <option value="{{ $brand->mfg_id }}">{{ $brand->name }}</option>
    @endforeach

</select>
<label>Vui lòng chọn xe</label>
<select name="chiecxe" id="chiecxe" class="form-control" disabled>
    <option >Vui lòng chọn mẫu xe</option>
</select>
<br>
<input type="button" class="btn btn-success" value="Chọn" onclick="display()">
<br>
type id<input type="text" readonly id="typeid"> <br>
seatnum<input type="text" readonly id="seatnum"><br>
brand<input type="text" readonly id="brand"><br>
model<input type="text" readonly id="model"><br>
Price<input type="text" readonly id="price"><br>
</form>

<script>
  
    function display(){
        let brands = {!! json_encode($brands->toArray(), JSON_HEX_TAG) !!};
        id = document.getElementById('hangxe').value; 
        brands.forEach(element =>{
            if(element['mfg_id']===id){
                name=element['name'];
                
            }
        });
        document.getElementById('brand').value= name
        document.getElementById('model').value= document.getElementById('chiecxe').value
        console.log(car);
        car.forEach(element=>{
            if(document.getElementById('chiecxe').value==element['model']){
                document.getElementById('typeid').value = element['type_id']
                document.getElementById('seatnum').value = element['seatnum']
                document.getElementById('price').value= element['suggest_price'];
            }
        });
       

    }
   

    
    function chiecxe1(){
        id = document.getElementById('hangxe').value;
        let xe = [];
        let i = 0;
         car = {!! json_encode($cars->toArray(), JSON_HEX_TAG) !!};
        



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
    
</body>
</html>



  


   

