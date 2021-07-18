@extends('layoutUser.layout')
@section('titleweb','Rental Car')
    
@section('bodycode')
<style>
.container {
    padding: 2rem 0rem;
  }
  
  h4 {
    margin: 2rem 0rem 1rem;
  }
  
  .table-image {
    td, th {
      vertical-align: middle;
    }
  }
</style>
<section class="ftco-section" style="margin-top: 100px">
    <div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Ảnh xe</h2>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-12">
          <table class="table table-image" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh chính giữa</th>
                <th scope="col">Ảnh bên trái</th>
                <th scope="col">Ảnh bên phải</th>
                <th scope="col">Ảnh đằng sau</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td scope="row" style="">
                </td>
                <td class="w-25">
                    <img src="../../images/carimg/{{ $images->image }}" class="img-fluid img-thumbnail" alt="Hình chính giữa">
                </td>
                <td class="w-25">
                    <img src="../../images/carimg/{{ $images->image_left }}" class="img-fluid img-thumbnail" alt="Hình bên trái">
                </td>
                <td class="w-25">
                    <img src="../../images/carimg/{{ $images->image_right }}" class="img-fluid img-thumbnail" alt="Hình bên phải">
                </td>
                <td class="w-25">
                    <img src="../../images/carimg/{{ $images->image_behind }}" class="img-fluid img-thumbnail" alt="Hình chính giữa">
                </td>
                    <a href="#" class="close" data-dismiss="alert" >
                      <td class="project-actions text-right" style="padding-top: 30px">
                          <a class="btn btn-info btn-sm"  href="" style="margin-bottom: 10px; margin-right: 5px">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
                          </a>
                          <a class="btn btn-danger btn-sm" href="" style="margin-right: 10px">
                              Xóa
                          </a>
                      </td>
                    </a>
                    
              </tr>
            
            </tbody>
          </table>   
      </div>
    </div>
  </div>
    </div>
</section>

@endsection