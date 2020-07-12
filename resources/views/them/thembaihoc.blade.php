@extends('layout.app')
@section('body')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<script>
  window.setTimeout(function() {
$(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
});
}, 2000); 
</script>
<div class="container fix-width bg-insert pl-5 pr-5">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">THÊM BÀI HỌC</h2> <br>
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('thongbao') }}
    </div>
    @endif
    <form action="/lesson/insert" method="POST">
      @csrf
        <div class="row">
            <div class="col-sm-2">    
              <h3 for="usr">Tên</h3>
            </div>
            <div class="col-sm-10" >    
              <input name="name" class="form-control" type="text" value=""><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2"> 
              <h3 for="usr">Chủ đề</h3>
            </div>
          <div class="col-sm-10">
            <select class="form-control" name="theme" id="sel1">
              <option>Chọn chủ đề</option>
              @foreach ($theme as $th)
              <option value="{{$th->id}}">{{$th->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br> 
        <div class="row">
            <div class="col-sm-2"> 
              <h3 for="usr">Mô tả</h3>
            </div>
          <div class="col-sm-10">
            <input name="description" class="form-control" type="text">
          </div>
        </div>
        <div class="row mt-3 mb-3 pb-3 justify-content-center">
          <button type="submit" class="btn btn-outline-info" >Thêm</button>
        </div>
    </form>
</div>
@endsection