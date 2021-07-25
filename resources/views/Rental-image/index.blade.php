@extends('layoutUser.layout')
@section('titleweb','Rental Car')
    
@section('bodycode')
<link rel="stylesheet" href="/path/to/dist/css/image-zoom.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('lightbox2-2.11.3/lightbox.min.css') }}">
<script src="{{ asset('lightbox2-2.11.3/lightbox-plus-jquery.min.js') }}"></script>
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

  div img { max-width: 100%; }
</style>

<section class="ftco-section" style="margin-top: 100px">
    <div class="container">
<div class="row justify-content-center">
    <div class="col-md-6 text-center mb-5">
        <h2 class="heading-section">Ảnh xe</h2>
        <h5>Cám ơn bạn đã chọn chúng tôi</h5>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-14">
          <table class="table table-image" style="text-align: center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Ảnh 1</th>
                <th scope="col">Ảnh 2</th>
                <th scope="col">Ảnh 3</th>
                <th scope="col">Ảnh 4</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td scope="row" style="">
                </td>
                <div class="gallery">
                <td class="w-25">
                  <a href="../../../images/carimg/{{ $data->image }}" data-lightbox="{{ $data->image }}"><img src="../../../images/carimg/{{ $data->image }}" class="img-fluid img-thumbnail gallery-image" alt="" ></a>
                    {{-- <img src="../../../images/carimg/{{ $data->image }}" class="img-fluid img-thumbnail gallery-image" alt="Hình chính giữa"> --}}
                </td>
                <td class="w-25">
                  <a href="../../../images/carimg/{{ $data->image_left }}" data-lightbox="{{ $data->image_left }}"><img src="../../../images/carimg/{{ $data->image_left }}" class="img-fluid img-thumbnail gallery-image" alt="" ></a>
                    {{-- <img src="../../../images/carimg/{{ $data->image }}" class="img-fluid img-thumbnail gallery-image" alt="Hình chính giữa"> --}}
                </td>
                <td class="w-25">
                  <a href="../../../images/carimg/{{ $data->image_right }}" data-lightbox="{{ $data->image_right }}"><img src="../../../images/carimg/{{ $data->image_right }}" class="img-fluid img-thumbnail gallery-image" alt="" ></a>
                    {{-- <img src="../../../images/carimg/{{ $data->image }}" class="img-fluid img-thumbnail gallery-image" alt="Hình chính giữa"> --}}
                </td>
                <td class="w-25">
                  <a href="../../../images/carimg/{{ $data->image_behind }}" data-lightbox="{{ $data->image_behind }}"><img src="../../../images/carimg/{{ $data->image_behind }}" class="img-fluid img-thumbnail gallery-image" alt="" ></a>
                    {{-- <img src="../../../images/carimg/{{ $data->image }}" class="img-fluid img-thumbnail gallery-image" alt="Hình chính giữa"> --}}
                </td>
              </div>
                    <a href="#" class="close" data-dismiss="alert" >
                      <td class="project-actions text-right" style="padding-top: 30px">
                          <a class="btn btn-info btn-sm"  href="{{ route('rental.image.update', $data->car_id) }}" style="margin-top: 40px; margin-right: 10px">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Sửa
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
<script>
  lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
  })
</script>
@endsection