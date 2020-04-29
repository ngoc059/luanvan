@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="container bg-insert pl-5 pr-5 pb-3 mb-3">
  @if (session('thongbao'))
  <div class="">
     {{ session('thongbao') }}
  </div>
  @endif
    <h2 class="text-center pt-3"> THÊM CÂU NGHE VIẾT RỒI VIẾT LẠI </h2><br>
    <form action="/question/insert-tn" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-sm-3"> 
          <h3 for="usr">chọn bài học</h3>
        </div>
      <div class="col-sm-9">
        <select class="form-control" name="lesson" id="sel1">
          @foreach ($lesson as $le)
          <option value="{{$le->id}}">{{$le->name}}</option>
          @endforeach
        </select>
      </div>
    </div> <br>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Tên</h3>
        </div>
        <div class="col-sm-9">    
          <input name="name" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Mô tả</h3>
        </div>
        <div class="col-sm-9">    
          <input name="description" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">audio</h3>
        </div>
        <div class="col-sm-9">    
            <input type="file" name="audio" class="form-control-file border">
        </div>
      </div>
      <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Thêm</button>
      </div>
      <form>
</div>
@endsection