@extends('main.main')
@section('maininsert')
<div class="container">
    <h2> THÊM CÂU HỎI TRẮC NGHIỆM </h2> <br>
    <form action="#" method="POST">
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu hỏi:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cauhoi" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời đúng:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloidung" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 1:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi1" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 2:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi2" class="form-control" type="text" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời 3:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi3" class="form-control" type="text" value=""> 
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12" style="text-align: center;">    
          <input class="btn btn-primary btn-block" type="submit" value="insert"> 
        </div>
      </div>
    <form>
</div>
@endsection