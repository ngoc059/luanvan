@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="container bg-insert pl-5 pr-5 pb-1 mb-3">
  @if (session('thongbao'))
  <div class="">
     {{ session('thongbao') }}
  </div>
  @endif
    <h2 class="text-center pt-3" style="text-shadow: 2px 2px 5px #B40486;"> THÊM CÂU NGHE VIẾT RỒI LẶP LẠI </h2><br>
    <form action="/question/insert-listen-repeat" method="POST" enctype="multipart/form-data">
      @csrf
  
      <div class="row">
      <div class="col-sm-9">
      <p>{{ $lesson->name }}</p>
      </div>
    </div> <br>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Tên câu hỏi</h3>
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
          <h3 for="usr">Thoại</h3>
        </div>
        <div class="col-sm-9">    
            <input type="text" name="question" class="form-control">
        </div>
      </div>
      <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Thêm</button>
      </div>
      <form>
</div>
@endsection