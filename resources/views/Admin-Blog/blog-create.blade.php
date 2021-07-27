@extends('layoutAdmin.layout')
@section('title', 'Admin Blog')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Create Bog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/blog/postCreateBlog') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">ID</label>
                                    <input type="number" class="form-control" id="id" name="id" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tiêu đề" required>
                                </div>

                                <div class="form-group">
                                    <label for="txt-price">Nội dung</label>
                                    <input type="text" class="form-control" id="content" name="content"
                                        placeholder="Nhập nội dung" required>
                                </div>

                                <div class="form-group">
                                    <label for="">Chọn ảnh</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="picture" name="picture" multiple>
                                            <label class="custom-file-label" for="">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="txtname">Ngày đăng</label>
                                    <input type="date" class="form-control" id="post date" name="post date"
                                        placeholder="Nhập ngày đăng" required>
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
