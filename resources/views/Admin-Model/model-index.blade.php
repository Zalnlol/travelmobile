@extends('layoutAdmin.layout')
@section('title', 'Đanh sách xe')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Model car</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Model car</li>
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
        <h3 class="card-title">Model car</h3>

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
                    <th>Mã dòng xe</th>
                    <th>Mã hãng xe</th>
                    <th>Model</th>
                    <th>Giá đề xuất</th>
                    <th>Nhiên liệu</th>
                    <th>Số ghế</th>
                    <th>Kiểu dáng</th>
                   
                </tr>
            </thead>
            <?php
            $count = 1;
            ?>
            <tbody>
                <tr>
                  @foreach ($model as $items)

                    <td>{{ $count++ }}</td>
                    <td>{{ $items->type_id }}</td>
                    <td>{{ $items->mfg_id }}</td>
                    <td>{{ $items->model }}</td>
                    <td>{{ $items->suggest_price }}</td>
                    @if ( $items->fuel_type == 0)
                    <td>Xăng</td>
                    @else
                    <td>Dầu</td>
                    @endif
                    <td>{{ $items->seatnum }}</td>
                    <td>{{ $items->car_style }}</td>
                    
                    <td>{{ $items->created_at }}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/model/update/' .$items->type_id) }}">
                            <i class="fas fa-folder">
                            </i>
                            Chỉnh sửa
                        </a>
                        
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/model/delete/' .$items->type_id) }}" onclick="javascript:return confirm('Are you sure ?')">
                            <i class="fas fa-trash">
                            </i>
                            Xóa
                        </a>
                    </td>
                </tr>
                                     
                @endforeach
            </tbody>
        </table>
        <div class="pagination-block" style="float: right; padding-right: 24px">
          {{ $model->links('Admin-Rental.layoutpaginationlinks') }}
        </div>
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