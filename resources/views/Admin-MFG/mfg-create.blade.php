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
                            <h3 class="card-title">Create MFG Car</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/mfg/postCreate') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Mã hãng xe</label>
                                    <input type="text" class="form-control" id="txt-id" name="mfg_id">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tên hãng xe</label>
                                    <input type="text" class="form-control" id="txt-name" name="name"
                                        placeholder="Nhập mã hãng xe">
                                </div>

                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <img class="img-fluid" src=""/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="logo">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Nơi sản xuất</label>
                                    <input type="text" class="form-control" id="txt-name" name="nation" placeholder="Nhập nơi sản xuất">
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Website</label>
                                    <input type="text" class="form-control" id="txt-name" name="website"
                                        placeholder="Nhập website của hãng">
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
