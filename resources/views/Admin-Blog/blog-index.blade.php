@extends('layoutAdmin.layout')
@section('title', 'Quản lý Blog')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Blog</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blog</li>
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
        <h3 class="card-title"> <a href="{{url('/admin/blog/createBlog')}}">Create new blog</a></h3>

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
                    
                    <th>ID</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Ảnh</th>
                    <th>Ngày đăng</th>
                    
                </tr>
            </thead>
            
            <tbody>
                <tr>
                  @foreach ($ds as $item)

                    <td>{{ $item->blog_id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->content }}</td>
                    <td><img src="{{asset("img/$item->blog_pic")}}" alt=""  ></td>
                    <td>{{ $item->post_date }}</td>
                    <td><a href="">View</a> |
                        <a href="{{url("/admin/blog/editBlog/{$item->blog_id}")}}">Edit</a> |
                        <a href="{{url("/admin/blog/delete/{$item->blog_id}")}}">Delete</a>
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