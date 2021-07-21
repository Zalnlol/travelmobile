@extends('layoutAdmin.layout')
@section('title', 'Admin Rental')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Model Car</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Mã model xe</label>
                                    <input type="text" class="form-control" id="txt-id" name="type_id" value="">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Mã hãng</label>
                                    <input type="text" class="form-control" id="txt-name" name="mfg_id"
                                        placeholder="Nhập mã hãng xe">
                                </div>

                                <div class="form-group">
                                    <label for="txt-price">Model xe</label>
                                    <input type="text" class="form-control" id="txt-price" name="model"
                                        placeholder="Nhập model xe">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Giá đề xuất</label>
                                    <input type="text" class="form-control" id="txt-name" name="suggest_price" placeholder="Nhập giá đề xuất">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Kiểu nhiên liệu</label>
                                    <input type="text" class="form-control" id="txt-name" name="fuel_type"
                                        placeholder="Nhập kiểu nhiên liệu">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Số ghế</label>
                                    <input type="text" class="form-control" id="txt-name" name="seatnum"
                                        placeholder="Nhập số ghế">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Kiểu dáng</label>
                                    <input type="text" class="form-control" id="txt-name" name="car_style"
                                        placeholder="Nhập giá đề xuất">
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
