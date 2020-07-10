@extends('main.mainlearn')
@section('mainlearn')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<script>
  function checkI (v) {
   const data = JSON.parse(v);
   const value = document.getElementById("voice").value;
   if (data.question == value) {
    document.getElementById("autoclick").click();
    document.getElementById("testview").innerHTML = data.question.toString();
    document.getElementById('exampleModalCenterdd').style.backgroundColor = "#66ff66"
    document.getElementById("exampleModalLongTitle").innerHTML = "chính xác";
   } 
   else {
    // const isWrong = localStorage.getItem('countWrong');
    //   if(isWrong) {
    //     isWrong++
    //     if(isWrong >= 5) {
    //       window.location.href('/lesson/lesson-list');
    //       localStorage.setItem('countWrong', 0)
    //     }
    //   } 
    //   localStorage.setItem('countWrong', isWrong);
      document.getElementById("autoclick").click();
      document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ff4d4d"
      document.getElementById("exampleModalLongTitle").innerHTML = "sai";
      document.getElementById("testview").innerHTML = data.question.toString();
    }
  }
</script>
<body>

<div class="container-sm pt-3" id="center">
  <div class="progress">
  <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">{{ $process['processNow'] }} / {{ $process['total'] }}</div>
  </div>
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;"> {{ $question->name }} </h2>
    <div class="row mt-3 mb-3 pb-3 justify-content-center">
    <button  class="btn btn-info p-1"  type="button" onclick="readOutLoud('{{$question->question}}')"
        ><i class='fas fa-volume-up'> </i></button> &nbsp;  {{$question->question}}
    </div>
    <form action={{url('learn/check')}} method="POST">
      @csrf
      <div class="row ml-5">
        <button  class="btn btn-info p-3"  type="button" onclick="record()"
             class="btn btn-outline-info"  ><i style='font-size:24px' class='fas'>&#xf3c9;</i> 
             </button>  <br> <br>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr" style="text-align: center; text-shadow: 2px 2px 5px #B40486;">Trả lời</h3>
        </div>
        <div class="col-sm-9">  
          <input name="test" class="form-control" id="voice" type="text" value=""><br>
        </div>
      </div>
      <button type="button" onclick="checkI('{{$question}}')" class="btn btn-primary btn-block">KIỂM TRA</button> 
      <form>
</div>
<!-- Button trigger modal -->
<button type="button" id="autoclick" data-toggle="modal" data-target="#exampleModalCenter">
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
@endsection