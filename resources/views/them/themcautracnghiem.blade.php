@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="bg-insert container pl-5 pr-5 pb-1">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;">THÊM CÂU HỎI TRẮC NGHIỆM</h2> <br>
    <form action="/question/insert-tn" method="POST">
      @csrf
      <div class="row">
        <div class="col-sm-3"> 
          <h3 for="usr">Chọn chủ đề</h3>
        </div>
        <div class="col-sm-9">
        <select class="form-control" name="theme" id="theme">
          <option value="0">Chọn chủ đề</option>

          @foreach ($theme as $le)
          <option value="{{$le->id}}">{{$le->name}}</option>
          @endforeach
        </select>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3"> 
          <h3 for="usr">Chọn bài học</h3>
        </div>
      <div class="col-sm-9">
        <select class="form-control" name="lesson" id="lesson">

        </select>
      </div>
    </div><br>
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
          <h3 for="usr">Câu trả lời đúng</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloidung" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 1</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi1" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 2</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi2" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 3</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi3" class="form-control" type="text" value=""> 
        </div>
      </div>
      <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Thêm</button>
      </div>
          {{-- <input class="btn btn-primary" type="submit" value="insert">  --}}

    <form>
</div>
@endsection