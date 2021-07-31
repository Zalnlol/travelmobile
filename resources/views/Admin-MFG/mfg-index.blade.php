@extends('layoutAdmin.layout')
@section('title', 'Danh sách hãng xe')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hãng Xe</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hãng Xe</li>
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
        <h3 class="card-title">Hãng Xe</h3>

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
                      <th>Mã hãng xe</th>
                      <th>Tên hãng xe</th>
                      <th>Logo</th>
                      <th>Xuất xứ</th>
                      <th>Wedsite</th>
                      <th></th>
                    
                  </tr>
              </thead>
              <?php
              $count = 1;
              ?>
              <tbody>
                  <tr>
                    @foreach ($mfg as $items)

                      <td></td>
                      <td>{{ $items->mfg_id }}</td>
                      <td>{{ $items->name }}</td>
                      <td><img width="100px" src="{{ url('/img/logo/	' .$items->logo ) }}"/></td>
                      {{-- <td>{{ $items->logo }}</td> --}}
                      <td>{{ $items->nation }}</td>
                      <td>{{ $items->website }}</td>
                      
                      <td>{{ $items->created_at }}</td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ url('admin/mfg/update/' .$items->mfg_id) }}" method="post">
                              <i class="fas fa-folder">
                              </i>
                              Chỉnh sửa
                          </a>
                          
                          <a class="btn btn-danger btn-sm" href="{{ url('admin/mfg/delete/' .$items->mfg_id) }}" onclick="javascript:return confirm('Are you sure ?')">
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
 