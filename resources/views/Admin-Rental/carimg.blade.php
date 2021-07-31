@extends('layoutAdmin.layout')
@section('title', 'Ảnh xe')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('lightbox2-2.11.3/lightbox.min.css') }}">
<script src="{{ asset('lightbox2-2.11.3/lightbox-plus-jquery.min.js') }}"></script>
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách xe đăng ký</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Ảnh xe</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Ảnh xe</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects" style="text-align: center">
            <thead>
                <tr>
                    <th style="width: 20%">Ảnh 1</th>
                    <th style="width: 20%">Ảnh 2</th>
                    <th style="width: 20%">Ảnh 3</th>
                    <th style="width: 20%">Ảnh 4</th>
                    <th >Ngày đăng ký</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($img as $item)
                <tr>
                  <div class="w3-content w3-display-container">
                    
                    <div class="gallery">
                    <td>
                        <a href="../../../images/carimg/{{ $item->image }}" data-lightbox="{{ $item->image }}"><img src="../../../images/carimg/{{ $item->image }}" class="img-fluid img-thumbnail gallery-image mySlides" alt="" style="width: 300px"></a>
                    </td>
                    <td>
                        <a href="../../../images/carimg/{{ $item->image_left }}" data-lightbox="{{ $item->image_left }}"><img src="../../../images/carimg/{{ $item->image_left }}" class="img-fluid img-thumbnail gallery-image mySlides" alt="" style="width: 300px"></a>
                    </td>
                    <td>
                        <a href="../../../images/carimg/{{ $item->image_right }}" data-lightbox="{{ $item->image_right }}"><img src="../../../images/carimg/{{ $item->image_right }}" class="img-fluid img-thumbnail gallery-image mySlides" alt="" style="width: 300px"></a>
                    </td>
                    <td>
                        <a href="../../../images/carimg/{{ $item->image_behind }}" data-lightbox="{{ $item->image_behind }}"><img src="../../../images/carimg/{{ $item->image_behind }}" class="img-fluid img-thumbnail gallery-image mySlides" alt="" style="width: 300px"></a>
                    </td>
              
                    <td>{{ $item->created_at }}</td>
                    {{-- <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.rental.view', $item->car_id) }}">
                            <i class="fas fa-folder">
                            </i>
                            Xem
                          </a>
                    </td> --}}
                    </div>

                  </div>
                </tr>
                                     
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    <!-- /.card -->

  </section>
  <!-- /.content -->
@endsection

@section('script-section')
    <script>
        $(function(){
            $('#product').DataTable({
                "paging":true,
                "lengthChange":false,
                "searching":false,
                "ordering":true,
                "info":true,
                "autoWidth":false,
            });
        });
    </script>
    <script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
      </script>
@endsection