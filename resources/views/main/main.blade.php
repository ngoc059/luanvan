@extends('layout.app')
@section('title')
    Mun
@endsection
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
@section('body')
<div class="container">
  <div class="row row-cols-1 row-cols-md-4">
        @foreach ($listV as $lV)
        <div class="col mb-4">
          <label>
          <div class="card h-100">
              <input type="radio" name="test" value="small" checked>
              <img onclick="onClick({{$lV->id}})" src="{{ asset('image/cat.jpg') }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title" id="{{$lV->id}}">{{$lV->chinese}}</h5>
            </div>
          </div>
            </label>
        </div>
        @endforeach
    </div> 
</div>  
@endsection