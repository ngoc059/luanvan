@extends('layout.app')
@section('body')
<div class="page-wrapper bg-gra-01 p-t-80 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3 ml-5" style="width: 650px; ">
            {{-- <div class="card-heading"></div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9"><h2 class="title"><i class="fab fa-accusoft"></i>    ĐĂNG KÝ THÔNG TIN    <i class="fab fa-accusoft"></i></h2> </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/trangchu2.svg') }}" alt="" style="width:120px; text-align:right">
                    </div>
                </div>
                
                <form method="POST" action="{{url('user/create')}}" style="background-image: ">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Tên" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 js-datepicker" type="text" placeholder="Ngày sinh" name="birthday">
                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender">
                                <option disabled="disabled" selected="selected">Giới tính</option>
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                                <option value="2">Khác</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Mật khẩu" name="password">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Số điện thoại" name="phone">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Đăng kí</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection