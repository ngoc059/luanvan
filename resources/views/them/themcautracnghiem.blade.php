@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<script>
  window.setTimeout(function() {
$(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
});
}, 2000); 
</script>
<div class="bg-insert container pl-5 pr-5 pb-1">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;">THÊM CÂU HỎI TRẮC NGHIỆM</h2> <br>
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('thongbao') }}
    </div>
    @endif
    <form action="/question/insert-tn" method="POST">
      @csrf
      <div class="row">
      <div class="col-sm-9">
        <p>{{ $lesson->name }}</p>
      </div>
    </div><br>
      <div class="row">
        <div class="col-sm-3">      
          <h3 for="usr">Câu hỏi yêu cầu</h3>
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