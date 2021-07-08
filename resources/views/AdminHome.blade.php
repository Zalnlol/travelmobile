@extends('layoutAdmin.layout')
@section('title', 'Admin Home')

@section('content')
    
    <div class="row">
        <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
            <h3>1150</h3>

            <p>Xe đã đăng ký</p>
            </div>
            <div class="icon">
                <i class="fas fa-car-side"></i>
            </div>
            <a href="#" class="small-box-footer">
            Xem thêm <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>100</h3>

            <p>Xe chờ duyệt</p>
            </div>
            <div class="icon">
                <i class="fas fa-car-alt"></i>
            </div>
            <a href="#" class="small-box-footer">
                Xem thêm <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
            <h3>44</h3>

            <p>GPLX chờ duyệt</p>
            </div>
            <div class="icon">
                <i class="fas fa-id-card"></i>
            </div>
            <a href="#" class="small-box-footer">
                Xem thêm <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
            <h3>65</h3>

            <p>Họp đồng thuê xe</p>
            </div>
            <div class="icon">
                <i class="fas fa-file-signature"></i>
            </div>
            <a href="#" class="small-box-footer">
                Xem thêm <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        </div>
        <!-- ./col -->
    </div>

    <div class="row">
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>100</h3>

                <p>Danh sách người dùng</p>
                </div>
                <div class="icon">
            <i class="fas fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">
                Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>100</h3>

                <p>Quản trị viên</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-cog"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
                <div class="inner">
                <h3>44</h3>

                <p>Doanh thu</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>65</h3>

                <p>Blog</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Xem thêm <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            </div>
            <!-- ./col -->
    </div>


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