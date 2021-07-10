@extends('layoutUser.layout')
@section('titleweb','Home Page')


<link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}">
    
@section('bodycode')
<div class="main-body">

    <x-searchbox></x-searchbox>


</div>
    
   


        @endsection


