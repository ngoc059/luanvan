@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
@section('body')
<div class="container" style="background-color: #e3f2fd;">
  <h1> THÊM CÂU HỎI</h1>
  <nav class="navbar navbar-expand-lg navbar-light fix-width">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="them-trac-nghiem">them cau trac nghiem<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="question-add">them nghe viet lai</a>
            </li>
            
          </ul>
        </div>
      </nav>
    <div style="margin-top: 40px;" class="justify-content-center">
        @yield('maininsert')
    </div>
  </div>

@endsection