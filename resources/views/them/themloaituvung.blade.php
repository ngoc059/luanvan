@extends('layout.app')
@section('body')
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
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;">THÊM LOẠI TỪ VỰNG</h2> <br>
    @if (session('thongbao'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ session('thongbao') }}
    </div>
    @endif
    <form action="/vocabulary/create-type" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-2">
                <h3 for="usr">Tên</h3>
            </div>
            <div class="col-sm-10">
                {{-- <select class="form-control" name="lesson" id="sel1"> --}}
                    {{-- @foreach ($lesson as $le)
          <option value="{{ $le->id }}">{{ $le->name }}</option>
                    @endforeach--}}
                    {{-- <option value="id">Tên</option> --}}
                    
                {{-- </select> --}}
                <input name="name" class="form-control" type="text" value=""><br>
            </div>
        </div>
            <div class="row mt-3 mb-3 justify-content-center">
                <button type="submit" class="btn btn-outline-info text-center">Thêm</button>
            </div>
            {{-- <input class="btn btn-primary" type="submit" value="insert"> --}}

            <form>
        </div>
        @endsection