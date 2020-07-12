@extends('layout.app')
@section('body')

<head>
    <script>
        window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000); 
    </script>
</head>

<body>
<div class="page-wrapper bg-gra-01 p-t-80 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3 ml-5" style="width: 650px; background-color: #009688 ">
            {{-- <div class="card-heading"></div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-9"><h2 class="title"><i class="fab fa-accusoft"></i>   TẠO CỘNG TÁC VIÊN    <i class="fab fa-accusoft"></i></h2> </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/trangchu2.svg') }}" alt="" style="width:120px; text-align:right">
                    </div>
                </div>
                
                <form method="POST" action="{{url('admin/create-user')}}">
                    @csrf
                    @if (session('thongbao'))
                    <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ session('thongbao') }}
                    </div>
                    @endif
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
                        <button class="btn btn--pill btn--green" type="submit">Tạo Tài Khoản</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
