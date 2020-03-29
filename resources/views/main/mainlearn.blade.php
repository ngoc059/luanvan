@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
@section('body')
<div class="container">
  <h1> LEARN </h1>
    <div style="margin-bottom: 40px; margin-top: 40px;">
        @yield('mainlearn')
    </div>
  </div>
@endsection