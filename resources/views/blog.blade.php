@extends('layoutUser.layout')
@section('titleweb', 'Blog')

@section('bodycode')

<div class="container">
    <div class="row">
        @foreach($data as $row)
        <div class="col-md-6">
            
            
            <img src="{{asset("img/blog/$row->blog_pic")}}" alt=""
            style="width:100%">
            
            <h3>{{$row->title}}</h3>
            <p>{{$row->content}}</p>
            
        </div>
    
        @endforeach
    </div>
</div>
    
 @endsection




