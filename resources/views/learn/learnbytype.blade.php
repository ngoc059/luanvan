@extends('main.mainlearn')
@section('mainlearn')
<script>
  window.setTimeout(function() {
  $(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
  });
  }, 2000); 
</script>
<div class="container">
  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">
      {{ $process['processNow'] }} / {{ $process['total'] }}</div>
  </div>
  <h3 style="text-align: center;">{{$question->description}} {{$question->name}} </h3>
  <form action={{ url('learn/check') }} method="POST">
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
    <br>
    <div class="row row-cols-3 row-cols-md-4">
      @foreach ($listAnswer as $answer)
      <div class="col mb-4">
        <label>
          <div class="card h-100">
            <input type="radio" name="test" value="{{$answer->id}}">
            <img onclick="onClick({{$answer->id}})" src="<?php echo asset("$answer->img") ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title" id="{{$answer->id}}">{{$answer->chinese}}</h5>
            </div>
          </div>
        </label>
      </div>
      @endforeach
    </div>
    <input type="submit" class="btn btn-info btn-block" name="check" value="KIỂM TRA">
  </form>
</div>
@endsection