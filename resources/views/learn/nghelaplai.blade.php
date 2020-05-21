@extends('layout.app')
@section('body')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<div class="container">
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;"> {{ $question->name }} </h2>
    <div class="row mt-3 mb-3 pb-3 justify-content-center">
    <button style='font-size:24px'  type="button" onclick="readOutLoud('{{$question->question}}')" class="btn btn-outline-info" ><i class='fas fa-volume-up'> </i></button>
    </div>
    <form action={{url('learn/check')}} method="POST">
      @csrf
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời</h3>
        </div>
        <div class="col-sm-9">  
        <button style='font-size:24px'  type="button" onclick="record()"
             class="btn btn-outline-info" > NÓI </button>  
          <input name="test" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Kiểm Tra</button> 
      <form>
</div>
@endsection