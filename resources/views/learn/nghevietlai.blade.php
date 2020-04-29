@extends('layout.app')
@section('body')
<div class="container">
    <h2> {{ $question->name }} </h2>
    <audio controls>
      <source src="<?php echo asset($question->path)?>" type="audio/mpeg">
    </audio>
    <form action="/learn/check" method="POST">
      @csrf
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">câu trả lời</h3>
        </div>
        <div class="col-sm-9">    
          <input name="test" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Kiểm Tra</button>
      <form>
</div>
@endsection