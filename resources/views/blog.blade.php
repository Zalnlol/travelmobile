@extends('layoutUser.layout')
@section('titleweb', 'Blog')

@section('bodycode')

    <div class="container">
        <div class="m-container">
            <br>
            <br>
            <br>
            <br>
            <br><br>
            <h4 class="blog-title">TravelerMobile'S BLOG</h4>
        </div>
        <div class="row">

            @foreach ($data as $row)
                <div class="col-md-6">

                    <br>
                    <br>
                    <br>
                    <img src="{{ asset("img/blog/$row->blog_pic") }}" alt="" style="width:100%">

                    <h6>{{ $row->title }}</h6>

                    <p>{{ $row->content }}</p>
                    <a href="#">Xem chi tiết</a>

                </div>

            @endforeach
            <div class="pagination-block" style="float: right; padding-right: 24px">
                {{ $data->links('Admin-Rental.layoutpaginationlinks') }}
            </div>
        </div>


    @endsection
