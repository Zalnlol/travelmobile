@extends('layoutUser.layout')
@section('titleweb', 'Cancell Form')
    
@section('bodycode')

<div  style="margin-top: 10%; height:300px">
    <h3 style="text-align: center">Form hủy chuyến</h3>

    <form action="{{url('/user/mytrips/cancell')}}" onsubmit="return checklydio()" method="POST">
        @csrf
        <div class="row" style="margin-top: 5%">
            <div class="col-sm-6" style="text-align: right">
                <label style="font-size: 12pt">Vui lòng chọn một trong số những lí do khiến bạn hủy chiến</label>
            </div>
    
            <div class="col-sm-3" style="text-align: left" >
               <select name="" id="selectlydo" class="form-control" >
                   <option selected value="">Vui lòng chọn lý do</option>
                   <option value="1">Chọn sai địa chỉ</option>
                   <option value="2">Chọn sai ngày</option>
                   <option value="3">Bận việc đột xuất</option>
                   <option value="4">Thay đổi kế hoạch</option>
                   <option value="5">Tìm được một xe mới ưng ý hơn</option>
               </select>
            </div>
           <input type="text" hidden name="contract_id" value="{{$id}}">

        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col" style="text-align: center">
                <span id="lydo" style="font-size: 13pt; color:red"></span>
            </div>
        </div>

        <div class="row" style="margin-top: 2%">
            <div class="col" style="text-align: center">
                <input type="submit" class="btn btn-success" value="Hủy Chuyến">
            </div>
        </div>
       

    </form>

</div>

<script>
    function checklydio(){
        if(document.getElementById('selectlydo').value==''){
            document.getElementById('lydo').innerText="Xin vui lòng chọn lý do"
            return false;
        }else{
            return true;  
        }
    }


</script>


@endsection