@extends('layouts.app')

@section('content')
<div class="container">

    <!--{{-- Bạn đã đăng nhập thành công --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bạn đã đăng nhập thành công!') }}
                </div>
            </div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-3 pt-5">
            <div><h1>{{ $user->name }}</h1></div>
        </div>
    </div>


</div>
@endsection
