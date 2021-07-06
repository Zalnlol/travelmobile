<!-- lưu tại /resources/views/user/create.blade.php -->
@extends('layout.layout')
@section('title', 'user - create new')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Create user account</h3>
                    </div>
                    {{-- <div class="card-comment">
                        <p>
                            @if ($message = Session:get('loi'))
                            <div class="alert alert-info alert block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                        </p>
                    </div> --}}
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('user/postCreate') }}" method="post" enctype="multipart/form-data"> 
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="txt-id">User ID</label>
                                <input type="text" class="form-control" id="txt-id" name="id" placeholder="1">
                            </div>
                            
                            <div class="form-group">
                                <label for="txtname">Full name</label>
                                <input type="text" class="form-control" id="txt-name" name="fullname" placeholder="Input full name">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Email</label>
                                <input type="text" class="form-control" id="txt-email" name="email" placeholder="Input email">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Password</label>
                                <input type="password" class="form-control" id="txt-password" name="password" placeholder="Input email">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Facebook</label>
                                <input type="text" class="form-control" id="txt-facebook" name="facebook" placeholder="Input facebook">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Mobile</label>
                                <input type="text" class="form-control" id="txt-mobile" name="mobile" placeholder="Input mobile number">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Gender</label>
                                <input type="" class="form-control" id="txt-gender" name="gender" placeholder="Input gender">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Date of birth</label>
                                <input type="date" class="form-control" id="txt-dob" name="dob" placeholder="Input date of birth">
                            </div>

                            <div class="form-group">
                                <label for="txtname">Driver ID</label>
                                <input type="text" class="form-control" id="txt-driver_id" name="driver_id" placeholder="Input driver ID">
                            </div>

                            <div class="form-group">
                                <label for="image">Driver ID image</label>
                                <div class="input-group">
                                    <div class="custome-file">
                                        <input type="file" multiple accept="image/*" class="custom-file-input" id="driver_id_image" name="driver_id_image">
                                        <label for="image" class="custom-file-label">Choose Image</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script-section')
    {{-- <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            bsCustomFileInput.init();
        });
    </script> --}}

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

@endsection
