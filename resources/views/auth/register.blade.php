<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/build.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    {{-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/main_re.css') }}" rel="stylesheet" media="all">
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
        <div class="card card-3 ml-5" style="width: 650px; ">
            {{-- <div class="card-heading"></div> --}}
            <div class="card-body" style="background-color: #607d8b">
                <div class="row">
                    <div class="col-md-9"><h2 class="title"><i class="fab fa-accusoft"></i>    ĐĂNG KÝ THÔNG TIN    <i class="fab fa-accusoft"></i></h2> </div>
                    <div class="col-md-3">
                        <img src="{{ asset('images/trangchu2.svg') }}" alt="" style="width:120px; text-align:right">
                    </div>
                </div>
                
                <form method="POST" action="{{url('user/create')}}" >
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
                        <input class="input--style-3" type="password" placeholder="Mật khẩu" name="password">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Số điện thoại" name="phone">
                    </div>
                    <div class="p-t-10 d-flex justify-content-between">
                        <button class="btn btn--pill btn--green" type="submit">Đăng kí</button>
                        <a class="btn btn--pill btn--green" href="/user/login-out">Quay Lại></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>