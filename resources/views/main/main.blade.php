@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
@section('body')
<div class="container" style="background-color: #e3f2fd;">
  <h1 style=" text-shadow: 2px 2px 5px #B40486;"> THÊM CÂU HỎI</h1>
  <nav class="navbar navbar-expand-lg navbar-light fix-width">
        <div class="collapse navbar-collapse add" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link " href="them-trac-nghiem">THÊM CÂU TRẮC NGHIỆM<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="question-add">THÊM NGHE RỒI VIẾT LẠI</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link " href="view-img">THÊM HỌC THEO HÌNH ẢNH</a>
            </li>

            <li class="nav-item">
              <a class="nav-link " href="view-insert-listen-repeat">THÊM NGHE RỒI LẶP LẠI</a>
            </li>
          </ul>
        </div>
      </nav>
    <div style="margin-top: 40px;" class="justify-content-center">
        @yield('maininsert')
    </div>
  </div>
  @yield('script')
@endsection