@extends('layoutUser.layout')
{{-- @section('titleweb', 'Profile') --}}
@section('bodycode')


                        <div class="avatar-img" style="background-image: url();">
                        </div>
                        
                            <div>
                                <p>{{ $user->name }}</p><a class="func-edit" title="Chỉnh sửa"><i
                                        class="ic ic-edit"></i></a>
                            </div>
                            <div class="d-flex"><span class="join">Tham gia: {{ $user->joined_date }}</span>
                                <div class="bar-line"></div><span class="sum-trips">Chưa có chuyến</span>
                            </div>
                        </div>
                    </div>
                    <div class="line-info">
                        <div class="d-flex">
                            <div class="info"><span class="label">Ngày sinh </span><span
                                    class="ctn">{{ $user->dob }}</span></div>
                            <div class="info"><span class="label">Giới tính </span><span
                                    class="ctn">{{ $user->gender }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <ul>
                    <li><span class="label">Điện thoại</span><span class="ctn"><span>{{ $user->mobile }}</span></span></li>
                    <li><span class="label">GPLX</span><span class="ctn"><span><i class=""></i></span><a
                                class="">   </a></a></span></li>
                    <li><span class="label">Email</span><span class="ctn">{{ $user->email }}<span></span></li>
                    <li><span class="label">Facebook</span><span class="ctn"><span>{{ $user->facebook_id }}
                                <span><a class=""><i class=""></i></a></span>
                            </span></span></li>
                    <li><span class="label">Google</span><span class="ctn"><a class=""><i
                                    class=""></i></a></span></li>
                </ul>
            </div>

    <script src="{{ asset('script/map.js') }}"></script>




@endsection
