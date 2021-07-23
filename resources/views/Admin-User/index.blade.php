<!-- Lưu tại resources/views/user/index.blade.php -->
@extends('layoutAdmin.layout')
@section('title', 'user index')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>DataTables</h1>
            </div>

            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div>
                <!-- card-header -->
                <div class="card-body">
                    <table id="user" class="table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>GPLX</th>
                                <th>Ngày tham gia</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($ds as $user)
                            <tr>
                                <td>{{$user->user_id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>{{$user->gender ? "Nam" : "Nữ"}}</td>
                                <td>{{$user->dob}}</td>
                                <td>{{$user->driver_id ? "Có" : "Chưa đăng ký"}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->status}}</td>

                                <td class="text-right">
                                    <a href="#" class="btn btn-primary btn-sm" >
                                        <i class="fas fa-folder">Xem</i>
                                    </a>
                                    <a href="{{ url('user/update'.$user->user_id) }}" class="btn btn-primary btn-sm" >
                                        <i class="fas fa-pencil-alt">Sửa</i>
                                    </a>
                                    <a href="{{ url('user/delete'.$user->user_id) }}" class="btn btn-primary btn-sm" >
                                        <i class="fas fa-trash">Xóa</i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
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