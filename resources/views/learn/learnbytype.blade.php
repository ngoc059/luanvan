@extends('main.mainlearn')
@section('mainlearn')

<div class="container">
  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">{{ $process['processNow'] }} / {{ $process['total'] }}</div>
  </div>
  <h3 style="text-align: center;">{{$question->description}} {{$question->name}} </h3>
  <form action={{ url('learn/check') }} method="POST">
    @csrf
    <br>
    <div class="row row-cols-3 row-cols-md-4">
      @foreach ($listAnswer as $answer)
      <div class="col mb-4">
        <label>
          <div class="card h-100">
            <input type="radio" name="test" value="{{$answer->id}}">
            <img onclick="onClick({{$answer->id}})" src="{{ asset('image/cat.jpg') }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title" id="{{$answer->id}}">{{$answer->chinese}}</h5>
            </div>
          </div>
        </label>
      </div>
      @endforeach
    </div>
    <input type="submit" class="form-control" name="check" value="check">
  </form>
</div>
@endsection