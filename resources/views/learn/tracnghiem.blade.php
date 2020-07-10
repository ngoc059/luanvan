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
  <script>
    let test;

    function chooseTNL (d) {
      this.test = JSON.parse(d);
    }

    function clickTNL (r) {
      if (this.test.is_corred == 1) {
        document.getElementById("autoclick").click();
        document.getElementById("testview").innerHTML = iscor.name.toString();
        document.getElementById("exampleModalLongTitle").innerHTML = "chính xác";
        document.getElementById('exampleModalCenterdd').style.backgroundColor = "#66ff66"
      } else {
      //   const isWrong = localStorage.getItem('countWrong');
      // if(isWrong) {
      //   isWrong++
      //   if(isWrong >= 5) {
      //     window.location.href('/lesson/lesson-list');
      //     localStorage.setItem('countWrong', 0)
      //   }
      // } 
      // localStorage.setItem('countWrong', isWrong);
        const data = JSON.parse(r);
        const iscor = data.find((rd)=> {
          return rd.is_corred == 1;
        });
        document.getElementById("autoclick").click();
        document.getElementById("exampleModalLongTitle").innerHTML = "sai";
        document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ff4d4d"
        document.getElementById("testview").innerHTML = iscor.name.toString();

      }
    }
  </script>
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
      <input type="radio" onclick="chooseTNL('{{$lV}}')" class="custom-control-input" value="{{$lV->id}}" id="{{$lV->id}}" name="test">
        <label class="custom-control-label" for="{{$lV->id}}">{{$lV->name}}</label>
      </div>
      @endforeach
    <input type="button" onclick="clickTNL('{{$answers}}')" class="btn btn-info btn-block" value="KIỂM TRA">
    </form>
  </div>
  <!-- Button trigger modal -->
<button type="button" id="autoclick" data-toggle="modal" data-target="#exampleModalCenter">
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLongTitle">Modal title</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="exampleModalCenterdd">
        <h3 id="testview"></h3>
      </div>
      <div class="modal-footer">
        <a href="{{ url('/learn/check')}}" class="btn btn-info" role="button" aria-pressed="true">Tiếp Tục</a>
      </div>
    </div>
  </div>
</div>
</body>

</html>
@endsection