@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            {{-- <img src="{{ $user->avatar_image }}" class="rounded-circle w-100"> --}}
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex align-items-center pb-3">
                <div class="h4">{{ $user->name }}</div>
            </div>

            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
            @endcan
        </div>
    </div>

</div>
@endsection
