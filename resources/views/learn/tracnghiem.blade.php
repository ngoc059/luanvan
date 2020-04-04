@extends('layout.app')

@section('body')
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h3 style="text-align: center;">Điền vào chỗ trống và trả lời câu hỏi</h3>
 <form action="/learn/check" method="POST">
  @csrf
  @foreach ($answers as $lV)
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="{{$lV->id}}" id="{{$lV->id}}" name="test">
        <label class="custom-control-label" for="{{$lV->id}}">{{$lV->name}}</label>
      </div>    
  @endforeach
<input type="submit" value="Submit">
</form> 
</div>
</body>
</html>
@endsection




