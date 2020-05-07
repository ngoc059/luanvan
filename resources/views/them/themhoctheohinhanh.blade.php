@extends('main.main')
@section('maininsert')
<link rel="stylesheet" type="text/css" href="{{ asset('css/learnbytype.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/learn.css') }}" media="screen" />
<div class="bg-insert container pl-5 pr-5 pb-1">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;">THÊM HỌC THEO HÌNH ẢNH</h2> <br>
    <form action="/question/insert-tn" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-3">
                <h3 for="usr">Chọn từ vựng</h3>
            </div>
            <div class="col-sm-9">
                <select class="form-control" name="lesson" id="sel1">
                    {{-- @foreach ($lesson as $le) --}}
                    {{-- <option value="{{$le->id }}">{{ $le->name }}</option> --}}
                    {{-- @endforeach --}}
                    <option value="id">Tên</option>
                </select>
            </div>
        </div>
        <div class="row justify-content-center mt-3 pb-3">
            <div> <button type="submit" class="btn btn-outline-info">Thêm</button></div>
        </div>
        <form>
</div>
@endsection