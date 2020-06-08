@extends('main.mainlearn')
@section('mainlearn')
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container-sm pt-3" id="center">
    <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">{{ $process['processNow'] }} / {{ $process['total'] }}</div>
    </div>
    <h3 style="text-align: center;">CHỌN CÂU TRẢ LỜI ĐÚNG</h3>
    <form action={{url('learn/check')}} method="POST">
      @csrf
      <h3> {{$question}} </h3>
      @foreach ($answers as $lV)
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" value="{{$lV->id}}" id="{{$lV->id}}" name="test">
        <label class="custom-control-label" for="{{$lV->id}}">{{$lV->name}}</label>
      </div>
      @endforeach
      <input type="submit" class="btn btn-primary btn-block" value="Submit">
    </form>
  </div>
</body>

</html>
@endsection