@extends('layout.app')
@section('body')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="container">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;"> {{ $question->name }} </h2>
    <audio controls>
      <source src="<?php echo asset($question->path)?>" type="audio/mpeg">
    </audio>
    <form action={{url('learn/check')}} method="POST">
      @csrf
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời</h3>
        </div>
        <div class="col-sm-9">    
          <input name="test" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Kiểm Tra</button> 
      {{-- <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Kiểm Tra</button>
      </div> --}}
      <form>
</div>
@endsection