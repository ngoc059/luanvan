@extends('layout.app')
@section('body')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="container bg-insert pl-5 pr-5 pb-1 mb-3">
  @if (session('thongbao'))
  <div class="">
     {{ session('thongbao') }}
  </div>
  @endif
    <h2 class="text-center pt-3" style="text-shadow: 2px 2px 5px #B40486;"> THÊM TỪ VỰNG </h2><br>
    <form action="/vocabulary/create" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-sm-3"> 
          <h3 for="usr">Loại</h3>
        </div>
      <div class="col-sm-9">
        <select class="form-control" name="lesson" id="sel1">
          @foreach ($typeVocabulary as $le)
          <option value="{{$le->id}}">{{$le->name}}</option>
          @endforeach
        </select>
      </div>
    </div> <br>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Tiếng Trung</h3>
        </div>
        <div class="col-sm-9">    
          <input name="tq" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Tiếng Việt </h3>
        </div>
        <div class="col-sm-9">    
          <input name="tv" class="form-control" type="text" value=""><br>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Ví dụ tiếng Trung </h3>
        </div>
        <div class="col-sm-9">    
          <input name="vdtq" class="form-control" type="text" value=""><br>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Ví dụ tiếng Việt</h3>
        </div>
        <div class="col-sm-9">    
          <input name="vdtv" class="form-control" type="text" value=""><br>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Audio</h3>
        </div>
        <div class="col-sm-9">    
            <input type="file" name="audio" class="form-control">
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-sm-3">    
          <h3 for="usr">Ảnh</h3>
        </div>
        <div class="col-sm-9">    
          <input name="hinhanh" class="form-control" type="file" value=""><br>
        </div>
      </div>
      
      <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Thêm</button>
      </div>
      <form>
</div>
@endsection