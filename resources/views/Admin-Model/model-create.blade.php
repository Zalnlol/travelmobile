@extends('layoutAdmin.layout')
@section('title', 'Thêm xe mới')
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
                        <form role="form" action="{{ url('admin/model/postCreate') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="card-body">
                                
                                {{-- <div class="form-group">
                                    <label for="txt-name">Mã hãng</label>
                                    <input type="text" class="form-control" id="txt-name" name="mfg_id"
                                        placeholder="Nhập mã hãng xe">
                                </div> --}}
                                <div>
                                    <label for="txt-name">Chọn hãng xe:</label>
                                    <select name="mfg_id" class="form-control" id="txt-name">
                                        {{-- <option value="AUD">AUD</option>
                                        <option value="MER">MER</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option> --}}
                                        @foreach ($mfg as $item)
                                        <option value="{{$item->mfg_id}}">{{$item->mfg_id}}-{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    <p class="help is-danger">{{ $errors->first('mfg_id') }}</p>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="txt-price">Model xe</label>
                                    <input type="text" class="form-control" id="txt-price" name="model"
                                        placeholder="Nhập model xe" value="">
                                        <p class="help is-danger">{{ $errors->first('model') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Giá đề xuất</label>
                                    <input type="text" class="form-control" id="txt-name" name="suggest_price"
                                        placeholder="Nhập giá đề xuất">
                                        <p class="help is-danger">{{ $errors->first('suggest_price') }}</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="txt-name">Kiểu nhiên liệu</label>
                                    <input type="text" class="form-control" id="txt-name" name="fuel_type"
                                        placeholder="Nhập kiểu nhiên liệu">
                                </div> --}}
                                <div class="form-group">
                                    <label >Kiểu nhiên liệu</label><br/>
                                    <input type="radio" id="txt-name" name="fuel_type" value="0">
                                    <label for="txt-name">Xăng</label><br>
                                    <input type="radio" id="txt-name" name="fuel_type" value="1">
                                    <label for="txt-name">Dầu</label><br>
                                    <p class="help is-danger">{{ $errors->first('fuel_type') }}</p>
                                </div>
                                <div class="form-group">
                                    
                                    <label for="txt-name">Số ghế</label>
                                    <input type="text" class="form-control" id="txt-name" name="seatnum"
                                        placeholder="Nhập số ghế">
                                        <p class="help is-danger">{{ $errors->first('seatnum') }}</p>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="txt-name">Kiểu dáng</label>
                                    <input type="text" class="form-control" id="txt-name" name="car_style"
                                        placeholder="Nhập giá đề xuất">
                                </div> --}}
                                <div>
                                    <label for="txt-name">Chọn kiểu dáng xe:</label>
                                    <select name="car_style" class="form-control" id="txt-name">
                                        <option value="SEDAN">Sedan</option>
                                        <option value="HATCHBACK">Hatchback</option>
                                        <option value="SUV">SUV (gầm cao)</option>
                                        <option value="Pick-up">Pick-up (Bán tải)</option>
                                        <option value="Coupe">Coupe</option>

                                    </select>
                                    <p class="help is-danger">{{ $errors->first('car_style') }}</p>
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
