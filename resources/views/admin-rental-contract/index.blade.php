@extends('layoutAdmin.layout')
@section('title', 'Danh sách hợp đồng')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Danh sách hợp đồng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
            <li class="breadcrumb-item active">Danh sách hợp đồng</li>
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
        <h3 class="card-title">Danh sách hợp đồng</h3>

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
                    <th>Mã hợp đồng</th>
                    <th>Tên xe</th>
                    <th>Ngày thuê</th>
                    <th>Ngày trả</th>
                    <th>Giá tổng</th>
                    <th>Phí dịch vụ</th>
                    <th>Trạng thái</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                @php
                    $i=0;
                @endphp
                
                  @foreach ($data1 as $item)
                  <tr>
                    <td>
                        @php
                            echo $i+=1;
                        @endphp        
                    </td>
                    <td>{{$item['contract_id']}}</td>
                    <td>{{$item['car_name']}}</td>
                    <td>{{$item['pickup_date']}}</td>
                    <td>{{$item['return_date']}}</td>
                    <td>{{$item['contract_value']}}</td>
                    <td>{{$item['service_cost']}}</td>
                    <td>{{$item['status']}}</td>
                    


                   
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{url('admin/rentalcontract/xemchitiet/'.$item['contract_id'])}}">
                            <i class="fas fa-folder">
                            </i>
                            Xem chi tiết
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