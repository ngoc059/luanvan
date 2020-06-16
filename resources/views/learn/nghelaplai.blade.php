@extends('main.mainlearn')
@section('mainlearn')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
<script>
  window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
  });
  }, 2000); 
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
      @if ($checkAnswer->status == 1)
      <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ $checkAnswer->info }}
      </div>
      @endif
  
      @if ($checkAnswer->status == 0)
      <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        {{ $checkAnswer->info }}
      </div>
      @endif
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
      <button type="submit" class="btn btn-primary btn-block">KIỂM TRA</button> 
      <form>
</div>
@endsection