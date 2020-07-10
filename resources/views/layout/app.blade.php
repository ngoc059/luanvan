<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/build.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}



    {{-- <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('vendor/datepicker/daterangepicker.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('css/main_re.css') }}" rel="stylesheet" media="all">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse add" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{ url('/lesson/lesson-list') }}">Danh sách bài học</a>
                </li>
                @if (Session::get('userLogin')->permission == 2)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Danh sách 
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="{{ url('/user/list-user/2')}}">Danh sách cộng tác viên</a> 
                        <a class="nav-link" href="{{ url('/lesson/list')}}">Danh sách bài học</a>
                        {{-- <a class="nav-link" href="{{ url('/lesson/list')}}">Danh sách loại bài học</a> --}}
                        <a class="nav-link" href="{{ url('/theme/list')}}">Danh sách chủ đề</a>
                        <a class="nav-link" href="{{ url('/user/list-user/1')}}">Danh sách học viên</a>
                        <a class="nav-link" href="{{ url('/vocabulary/list')}}">Danh sách từ vựng</a>
                        <a class="nav-link" href="{{ url('/vocabulary/list')}}">Danh sách loại từ vựng</a>
                    </div>
                </li>
                @endif
    

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Thêm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link" href="{{ url('/question/them-trac-nghiem')}}">Thêm câu hỏi</a>
                        <a class="nav-link" href="{{ url('/lesson/lesson-add')}}">Thêm bài học</a>
                        <a class="nav-link" href="{{ url('/theme/view-insert')}}">Thêm chủ đề</a>
                        <a class="nav-link" href="{{ url('/type/view-type')}}">Thêm loại từ vựng</a>
                        <a class="nav-link" href="{{ url('/vocabulary/view-vocabulary')}}">Thêm từ vựng</a>

                    </div>
                </li> --}}

                {{-- <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li> --}}
            </ul>
            {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('user/login-out')}}">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </nav>
    <div style="margin-bottom: 40px; margin-top: 40px;">
        @yield('body')
    </div>
    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    {{-- <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
              <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
              <!-- Rights-->
              <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
            </div> --}}
                </div>
                <div class="col-md-4">
                    <h5>Contacts</h5>
                    <dl class="contact-list">
                        <dt>PHẠM THẾ NGỌC</dt>
                        <dt>MSSV:</dt>
                        <dd></a> B15505893</a>
                        </dd>
                    </dl>
                    {{-- <dl class="contact-list">

                        <dt>Address:</dt>
                        <dd>Đường 3/2, Q.Ninh Kiều , TP.Cần Thơ</dd>
                    </dl> --}}
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:#">ngocb1505893@student.ctu.edu.vn</a></dd>
                    </dl>

                </div>
                {{-- <div class="col-md-4 col-xl-3">
            <h5>Links</h5>
            <ul class="nav-list">
              <li><a href="#">About</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contacts</a></li>
              <li><a href="#">Pricing</a></li>
            </ul>
          </div> --}}
            </div>
        </div>
        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>PHẠM THẾ
                        NGỌC</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span
                        class="icon mdi mdi-instagram"></span><span>B1505893</span></a></div>
            {{-- <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
        <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div> --}}
        </div>
    </footer>



    <!-- loader -->
    <div id="dropDownSelect1"></div>

    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/speech.js') }}"></script>    
    <script src="{{ asset('js/ajax.js') }}"></script>




    <!-- Vendor JS-->
    <script src="{{ asset('vendor/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>


</body>

</html>
