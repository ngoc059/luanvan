@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
@section('body')
<div class="container">
  <h1> THEM CAU HOI</h1>
  <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="them-trac-nghiem">them cau trac nghiem<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="them-nghe-viet-lai">them nghe viet lai</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </nav>
    <div style="margin-bottom: 40px; margin-top: 40px;">
        @yield('maininsert')
    </div>
  </div>

@endsection