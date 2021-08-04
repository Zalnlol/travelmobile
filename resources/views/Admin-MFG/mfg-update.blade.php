@extends('layoutAdmin.layout')
@section('title', 'Chỉnh sửa hãng xe')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <div class="card-header">
                            <h3 class="card-title">Update Hãng xe {{ $mfg->name }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('admin/mfg/postUpdate/'. $mfg->mfg_id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Mã hãng xe</label>
                                    <input type="text" class="form-control" id="txt-id" name="mfg_id"
                                        placeholder="{{ $mfg->mfg_id }} " value="{{ $mfg->mfg_id }}" readonly>
                                    <p class="help is-danger" forn-color='red'>{{ $errors->first('mfg_id') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Tên hãng xe</label>
                                    <input type="text" class="form-control" id="txt-name" name="name"
                                        placeholder="{{ $mfg->name }}" value="{{ $mfg->name }}" readonly>

                                </div>

                                <div class="form-group">
                                    <label for="image">Logo</label>
                                    <img class="img-fluid" src="{{ url('/img/logo/' . $mfg->logo) }}"><br><br>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="logo">
                                            <label class="custom-file-label" for="image"></label>
                                        </div>
                                    </div>

                               

                                    <p class="help is-danger">{{ $errors->first('logo') }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Chọn Xuất xứ:</label>
                                    <select name="nation" class="form-control" id="txt-name">
                                        <option value="">----- Chọn xuất xứ -----</option>
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
                                        placeholder="{{ $mfg->wedsite }}" value="{{ $mfg->website }}">
                                    <p class="help is-danger">{{ $errors->first('website') }}</p>
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
        <script>
            // Add the following code if you want the name of the file appear on select
            $(".custom-file-input").on("change", function() {
               
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>


    </section>
@endsection
@section('script-section')

    @if (session('status'))
        <script>
            let status = {!! json_encode(session('status'), JSON_HEX_TAG) !!};
            alert(status)
        </script>
    @endif

    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file- input.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
