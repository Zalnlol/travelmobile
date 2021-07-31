@extends('layoutAdmin.layout')
@section('title', 'Danh sách xe đăng ký')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách xe đăng ký</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Danh sách xe đăng ký</li>
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
        <h3 class="card-title">Danh sách xe đăng ký</h3>

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
                    <th style="width: 1%">#</th>
                    <th>Trạng thái xe</th>
                    <th>Biển số</th>
                    <th>Hãng xe</th>
                    <th>Mẫu xe</th>
                    <th>Ngày đăng ký</th>
                    <th></th>
                    {{-- <th>Biển số xe</th>
                    <th>Hãng xe</th>
                    <th>Mẫu xe</th> --}}
                    {{-- <th>Số ghế</th>
                    <th>Năm sản xuất</th>
                    <th>Truyền động</th>
                    <th>Nhiên liệu</th>
                    <th>Mức tiêu thụ</th>
                    <th style="width: 10%">Mô tả</th>          
                    <th>Cửa sổ trời</th>
                    <th>Bluetooth</th>
                    <th>GPS</th>
                    <th>USB</th>
                    <th>Ghế trẻ em</th>
                    <th>Bản đồ</th>
                    <th>Camera</th>
                    <th>Giá thuê</th>
                    <th>Giảm thuê tuần</th>
                    <th>Giảm thuê tháng</th>
                    <th>Địa chỉ</th>
                    <th>Quãng đường giao xe tối đa</th>
                    <th>Phí giao xe</th>
                    <th>Miễn phí giao xe trong</th>
                    <th>Giới hạn km/ngày</th>
                    <th>Phí vượt giới hạn</th>
                    <th>Điều khoản thuê xe</th> --}}
                </tr>
            </thead>
            <?php
            $count = 1;
            ?>
            <tbody>
                <tr>
                  @foreach ($rental as $item)

                    <td>{{ $count++ }}</td>
                    <td>
                      @if ($item->status == 1)
                      <span class="badge badge-success">Đang chờ duyệt</span>
                      @endif
                      @if ($item->status == 2)
                      <span class="badge badge-success">Đang hoạt động</span>
                      @endif
                      @if ($item->status == 3)
                      <span class="badge badge-danger">Đã bị từ chối</span>
                      @endif
                      @if ($item->status == 4)
                      <span class="badge badge-danger">Đang tạm ngưng</span>
                      @endif
                    </td>
                    <td>{{ $item->plate_id }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    {{-- <td>{{ $item->plate_id }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->seatnum }}</td>
                    <td>{{ $item->model_year }}</td> --}}
                    {{-- <td>
                        @if($item->auto == 1)
                            <span class="badge badge-success">Số tự động</span>
                        @endif
                        @if($item->auto == 2)
                            <span class="badge badge-success">Số sàn</span>
                        @endif
                    </td>
                    <td> 
                        @if($item->fuel == 1)
                            <span class="badge badge-success">Xăng</span>
                        @endif
                        @if($item->fuel == 2)
                        <span class="badge badge-success">Dầu diesel</span>
                    @endif
                    </td>
                    <td>{{ $item->consumption }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                      @if($item->convertible)
                        <span class="badge badge-success">Cửa sổ trời</span>
                      @endif
                    </td>
                    <td>
                      @if($item->bluetooth)
                        <span class="badge badge-success">Bluetooth</span>
                      @endif
                    </td>
                    <td>
                        @if($item->gps)
                          <span class="badge badge-success">GPS</span>
                       @endif</td>
                    <td>
                      @if($item->usb)
                        <span class="badge badge-success">Usb</span>
                      @endif
                    </td>
                    <td>
                      @if($item->kid_chair)
                      <span class="badge badge-success">Ghế trẻ em</span>
                    @endif
                    </td>
                    <td>
                      @if($item->map)
                        <span class="badge badge-success">Bản đồ</span>
                      @endif
                    </td>
                    <td>
                      @if($item->camera)
                        <span class="badge badge-success">Camera</span>
                      @endif
                    </td>
                    <td>{{ $item->rent_price }}K</td>
                    <td>{{ $item->discount_weekly }}K</td>
                    <td>{{ $item->discount_monthly }}K</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->max_ship_distance }}km</td>
                    <td>{{ $item->shipping_price_km }}K</td>
                    <td>{{ $item->free_ship_distance }}km</td>
                    <td>{{ $item->max_travel_distance }}km</td>
                    <td>{{ $item->over_max_travel_cost }}k</td>
                    <td>{{ $item->rules }}</td> --}}
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.rental.view', $item->car_id) }}">
                            <i class="fas fa-folder">
                            </i>
                            Xem
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('admin.rental.image', $item->car_id) }}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Xem ảnh
                        </a>
                        <a class="btn btn-danger btn-sm" href="{{ route('admin.rental.delete', $item->car_id) }}" onclick="javascript:return confirm('Are you sure ?')">
                            <i class="fas fa-trash">
                            </i>
                            Xóa
                        </a>
                    </td>
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
@endsection