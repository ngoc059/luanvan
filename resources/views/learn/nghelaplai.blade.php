@extends('main.mainlearn')
@section('mainlearn')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<script>
  function checkI (v) {
   const data = JSON.parse(v);
   const value = document.getElementById("voice").value;
   if (data.question.trim() == value.trim()) {
    document.getElementById("autoclick").click();
    document.getElementById("testview").innerHTML = data.question.toString();
    document.getElementById('exampleModalCenterdd').style.backgroundColor = "#66ff66"
    document.getElementById("exampleModalLongTitle").innerHTML = "chính xác";
   } 
   else {
    let isWrong = Number(localStorage.getItem('countWrong'));
      if(isWrong) {
        localStorage.setItem('countWrong', Number(isWrong) + 1);
        if((Number(isWrong)+ 1) >= 5) {
          localStorage.clear();
          document.getElementById("autoclick").click();
          document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ffdddd"
          document.getElementById("exampleModalLongTitle").innerHTML = "Đã sai hơn 5 câu";
          document.getElementById("testview").innerHTML = "Vui Lòng Làm Lại Bài Học";
          document.getElementById("ahref").href="/lesson/lesson-list"; 
          return;
        }
      } else {
        localStorage.setItem('countWrong', 1);
      } 
      document.getElementById("autoclick").click();
      document.getElementById('exampleModalCenterdd').style.backgroundColor = "#ffdddd"
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
        ><i class='fas fa-volume-up'> </i>  {{$question->question}}</button> &nbsp;
    </div>
    <form action={{url('learn/check')}} method="POST">
      @csrf
      <div class="row">
        <div class="col-3">    
           <button  for="usr" style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="form-control btn btn-info px-1"  type="button" onclick="record()"  ><i style='font-size:24px' class='fas'>&#xf3c9;</i> Trả lời
          </button>
        </div>
        <div class="col-9">  
          <input name="test" disabled class="form-control" id="voice" type="text" value=""><br>
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
        <a href="{{ url('/learn/check')}}" id="ahref" class="btn btn-info" role="button" aria-pressed="true">Tiếp Tục</a>
      </div>
    </div>
  </div>
</div>
@endsection