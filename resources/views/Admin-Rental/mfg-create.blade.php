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
                                    <input type="text" class="form-control" id="txt-id" name="mfg_id" placeholder="Nhập mã hãng xe">
                                    <p class="help is-danger">{{ $errors->first('mfg_id') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tên hãng xe</label>
                                    <input type="text" class="form-control" id="txt-name" name="name"
                                        placeholder="Nhập tên hãng xe">
                                        <p class="help is-danger">{{ $errors->first('name') }}</p>
                                </div>

                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <img class="img-fluid" src=""/>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="logo">
                                            <label class="custom-file-label" for="image">-----  Chọn logo  -----</label>
                                        </div>
                                    </div>
                                    <p class="help is-danger">{{ $errors->first('logo') }}</p>
                                </div>
                                <div>
                                    <label for="txt-name">Chọn Xuất xứ:</label>
                                    <select name="nation" class="form-control" id="txt-name">
                                        <option value="">-----  Chọn xuất xứ  -----</option>
                                        <option value="England">Anh ( England )</option>
                                        <option value="Germary">Đức ( Germary )</option>
                                        <option value="Korea">Hàn Quốc ( Korea )</option>
                                        <option value="Italia">Italia</option>
                                        <option value="USA">Mỹ ( USA )</option>
                                        <option value="Japan">Nhật Bản ( Japan )</option>
                                        <option value="France">Pháp ( France )</option>
                                        <option value="China">Trung Quốc ( China ) </option>
                                        <option value="Vietnam">Việt Nam</option>
                                        <option value="Orther Where">Các Nước Khác</option>
                                    </select>
                                    <p class="help is-danger">{{ $errors->first('nation') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Website</label>
                                    <input type="text" class="form-control" id="txt-name" name="website"
                                        placeholder="Nhập website của hãng">
                                        <p class="help is-danger">{{ $errors->first('website') }}</p>
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
