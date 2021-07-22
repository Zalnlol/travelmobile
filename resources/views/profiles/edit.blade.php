@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Edit Profile</h1>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Tên</label>

                    <input id="fullname" type="text" 
                    class="form-control {{ $error->has('title') ? 'is-invalid' : ''}}" 
                    name="fullname" value="{{ old('fullname' )}}" 
                    autocomplete="Tên đầy đủ" autofocus>

                    @if ($error->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $error->first('title') }}</strong>
                        </span>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection