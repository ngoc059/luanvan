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
<div class="container">
  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">{{ $process['processNow'] }} / {{ $process['total'] }}</div>
  </div>
    <h2 class="text-center pt-3 " style="text-shadow: 2px 2px 5px #B40486;"> {{ $question->name }} </h2>
    <div class="row mt-3 mb-3 pb-3 justify-content-center">
    <button  class="btn btn-info"  type="button" onclick="readOutLoud('{{$question->question}}')"  ><i class='fas fa-volume-up'> </i></button>
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
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời</h3>
        </div>
        <div class="col-sm-9">    
          <input name="test" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <button type="submit" class="btn btn-info">Kiểm Tra</button> 
      {{-- <div class="row mt-3 mb-3 justify-content-center">
        <button type="submit" class="btn btn-outline-info" >Kiểm Tra</button>
      </div> --}}
      <form>
</div>
</body>
@endsection