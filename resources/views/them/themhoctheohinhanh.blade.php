@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{ asset('css/learnbytype.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/learn.css') }}" media="screen" />
<script>
  window.setTimeout(function() {
$(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
});
}, 2000); 
</script>
<div class="bg-insert container pl-5 pr-5 pb-1">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;">THÊM HỌC THEO HÌNH ẢNH</h2> <br>
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('thongbao') }}
    </div>
    @endif
    <form action="/question/insert-img" method="POST">
        @csrf
        <div class="row">
         
        <div class="col-sm-9">
          <p>{{ $lesson->name }}</p>
        </div>
      </div>
        <div class="row">
        <div class="col-sm-3 mt-4">      
          <h3 for="usr">Tên</h3>
        </div>
        <div class="col-sm-9 mt-4">    
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
                <h3 for="usr">Chọn từ vựng</h3>
            </div>
            <div class="col-sm-9">
                <select class="form-control" name="vocabulary" id="sel1">
                    @foreach ($vocabulary as $ele)
                <option value="{{$ele->id }}">{{ $ele->vietnamese }} : {{$ele->chinese}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row justify-content-center mt-3 pb-3">
            <div> <button type="submit" class="btn btn-outline-info">Thêm</button></div>
        </div>
        <form>
</div>
@endsection