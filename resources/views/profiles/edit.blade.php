@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Chỉnh sửa thông tin cá nhân</h1>
                </div>

                <hr>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="name">Họ tên</label>
                        <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name' ) ?? $user->name }}" autofocus>

                        @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label for="image">Ảnh đại diện</label>
    
                        <input type="file" class="form-control-file" id="image" name="image">
    
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="mobile">Số điện thoại</label>
                        <input id="mobile" type="text" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" name="mobile" value="{{ old('mobile' ) ?? $user->mobile}}">
                        
                        @if ($errors->has('mobile'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('mobile') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label class="labels">Ngày sinh</label>
                        <input type="date" class="form-control {{ $errors->has('date') ? 'is-invalid' : ''}}" name="date" value="{{ old('date' ) ?? $user->dob}}" >

                        @if ($errors->has('dob'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dob') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gender" class="col-md-3">Giới tính</label>
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="1" checked> <span>Nam</span> </label> </div>
                    <div class="px-2"> <label class="radio"> <input type="radio" name="gender" value="0"> <span>Nữ</span> </label> </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="email">Địa chỉ email</label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" name="email" value="{{ old('email' ) ?? $user->email }}" autocomplete="email">

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <label for="driver_id">Giấy phép lái xe</label>
                        <input id="driver_id" type="text" class="form-control {{ $errors->has('driver_id') ? 'is-invalid' : ''}}" value="{{ old('driver_id' ) ?? $user->driver_id }}" >

                        @if ($errors->has('driver_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('driver_id') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-form-label">
                        <label for="driver_id_image">Ảnh GPLX</label>
    
                        <input type="file" class="form-control-file" id="image" name="image">
    
                        @if ($errors->has('driver_id_image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('driver_id_image') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-6 col-form-label">
                        <button class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
                

            </div>
        </div>
    </form>
</div>
@endsection