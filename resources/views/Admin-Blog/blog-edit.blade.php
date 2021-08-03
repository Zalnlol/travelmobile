@extends('layoutAdmin.layout')
@section('title', 'Chỉnh sửa Blog')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Bog</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/blog/editPostBlog') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">ID</label>
                                    <input type="number" class="form-control" id="blog_id" name="blog_id" readonly value="{{ $blog->blog_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tiêu đề</label>
                                    {{-- <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Nhập tiêu đề" required value="{{ $blog->title }}"> --}}
                                        <textarea class="form-control" rows="3" id="title" name="title"
                                        placeholder="" cols="40"
                                        rows="6">{{ $blog->title }}</textarea>
                                </div>
               

                                <div class="form-group">
                                    <label for="txt-price">Nội dung</label>
                                    {{-- <input type="text" class="form-control ckeditor" id="content" name="content"
                                        placeholder="Nhập nội dung" required value="{{ $blog->content }}"> --}}
                                        <textarea class="form-control ckeditor" id="content" name="content"
                                        placeholder="" cols="40" rows="4">{{ $blog->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="" class="label-control">Chọn ảnh</label>
                                    <img class="img-fluid" src="{{ url("img/$blog->blog_pic") }}" alt="">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="blog_pic" name="blog_pic" multiple
                                                accept="img/" value="{{ $blog->blog_pic }}">
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
                                        placeholder="Nhập ngày đăng" required value="{{ $blog->post_date }}">
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
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> 
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-fileinput.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
