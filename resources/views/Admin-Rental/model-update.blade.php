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
                            <h3 class="card-title">Update {{ $p->model }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('model/postUpdate/' .$p->type_id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-id">Mã model xe</label>
                                    <input type="text" class="form-control" id="txt-id" name="type_id" placeholder="{{$p->type_id}}"
                                        value="{{ $p->type_id }}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="txt-name">Mã hãng xe</label>
                                    <input type="text" class="form-control" id="txt-name" name="mfg_id"
                                        placeholder="{{ $p->mfg_id }}" value="{{ $p->mfg_id }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Model xe</label>
                                    <input type="text" class="form-control" id="txt-price" name="model" placeholder="{{ $p->model }}"
                                        value="{{ $p->model }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Giá đề xuất</label>
                                    <input type="text" class="form-control" id="txt-price" name="suggest_price" placeholder="{{ $p->suggest_price }}"
                                        value="{{ $p->suggest_price }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Nhiên liệu</label>
                                    <input type="text" class="form-control" id="txt-price" name="fuel_type" placeholder="{{ $p->fuel_type }}"
                                        value="{{ $p->fuel_type }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Số ghế</label>
                                    <input type="text" class="form-control" id="txt-price" name="seatnum" placeholder="{{ $p->seatnum }}"
                                        value="{{ $p->seatnum }}">
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Kiểu dáng</label>
                                    <input type="text" class="form-control" id="txt-price" name="car_style" placeholder="{{ $p->car_style }}"
                                        value="{{ $p->car_style }}">
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
