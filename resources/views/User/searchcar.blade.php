@extends('layoutUser.layout')
@section('titleweb','Search Cars')


<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
    
@section('bodycode')
<div class="main-body container">

    <div class="row">
        <div class="col-sm-4">
            <div >
                <x-searchbox></x-searchbox>
            </div>
        </div>
        <div class="col-sm-8">
            <div >
                <x-carlist></x-carlist>
            </div>
        </div>

    </div>

    

    <div style="height: 50px"></div>


</div>
    
   


        @endsection


