@extends('layoutAdmin.layout')
@section('titleweb', 'View')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->

                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Chi tiet </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('/admin/blog/detail/{blog_id}') }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">ID</label>
                                    <input type="number" class="form-control" id="id" name="blog_id"
                                        value="{{ $blog->blog_id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tiêu đề</label>
                                    {{-- <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Nhập tiêu đề" required value="{{ $blog->title }}"> --}}
                                    <textarea class="form-control" rows="3" id="description" name="title" cols="40"
                                        rows="6" value="" readonly>{{ $blog->title }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Nội dung</label>
                                    {{-- <input type="text" class="form-control ckeditor" id="content" name="content"
                                    placeholder="Nhập nội dung" required value="{{ $blog->content }}"> --}}
                                    <textarea class="form-control ckeditor" id="description" name="content" cols="70"
                                        rows="4" value="" readonly>{{ $blog->content }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="txt-price">Ảnh </label>
                                    <div id="image" name="blog_pic">
                                        <img width="550px" src="../../../img/blog/{{ $blog->blog_pic }}"/>
                                    </div>
                                </div>


                                {{-- <div class="form-group">
                                <label for="txtname">Ngày đăng</label>
                                <input type="date" class="form-control" id="post date" name="post date"
                                    placeholder="Nhập ngày đăng" required>
                            </div> --}}

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Return</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

@endsection
