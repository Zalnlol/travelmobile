@extends('layoutAdmin.layout')
@section('title', 'Admin Rental')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-4">
                    <!-- general form elements -->
                    
                    <div class="card card-primary">
                        
                        <div class="card-header">
                            <h3 class="card-title">Chi tiết tài khoản của {{ $user->name }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/postUpdate/' .$user->user_id) }}" method="POST"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Mã tài khoản</label>
                                    <input type="text" class="form-control" id="txt-id" name="type_id" placeholder="{{$user->user_id}}"
                                        value="{{ $user->type_id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Họ tên</label>
                                    <input type="text" class="form-control" id="txt-name" name="name" placeholder="{{ $user->name }}"
                                        value="{{ $user->name }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-email">Email</label>
                                    <input type="text" class="form-control" id="txt-email" name="email" placeholder="{{ $user->email }}"
                                        value="{{ $user->email }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-mobile">Số điện thoại</label>
                                    <input type="text" class="form-control" id="txt-mobile" name="mobile" placeholder="{{ $user->mobile }}"
                                        value="{{ $user->mobile }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-gender">Giới tính: </label>
                                    <input type="text" class="form-control" name="gender" value="{{ $user->gender}}" placeholder="{{ $user->gender }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-status">Trạng thái: </label>
                                    <input type="radio" name="status" value="0" checked value="{{ $user->status }}"> <span>Hoạt động</span>
                                    <input type="radio" name="status" value="1" value="{{ $user->status }}"> <span>Khóa</span>
                                </div>
                                <div class="form-group">
                                    <label for="txt-license">Số giấy phép lái xe</label>
                                    <input type="text" class="form-control" id="txt-license" name="driver_id" placeholder="{{ $user->driver_id }}"
                                        value="{{ $user->driver_id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-approval">Duyệt GPLX: </label>

                                    @if ($user->driver_id == 0)
                                        <input type="radio" name="driver_id_image_approval" value="0" checked> <span>Chưa duyệt</span>
                                        <input type="radio" name="driver_id_image_approval" value="1"> <span>Duyệt</span>
                                    
                                    @else 
                                        <input type="radio" name="driver_id_image_approval" value="0"> <span>Chưa duyệt</span>
                                        <input type="radio" name="driver_id_image_approval" value="1" checked> <span>Duyệt</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Ảnh bằng lái</label>
                                    <div id="image" name="driver_id_image">
                                        <img style="background-size: cover; width:200px" src="{{ url('img/'.$user->driver_id_image ) }}"/>
                                    </div>
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
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file- input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
