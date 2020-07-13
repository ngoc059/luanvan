@extends('main.mainlearn')
@section('mainlearn')
<script>

</script>
<div class="container">
  <div class="progress">
    <div class="progress-bar bg-info progress-bar-striped" style="width:{{ $process['persen'] }}%">
      {{ $process['processNow'] }} / {{ $process['total'] }}</div>
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
          <img onclick="onClick({{$answer->id}}, '{{$answer->chinese}}', '{{$answer}}')" src="<?php echo asset("$answer->img") ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title" id="{{$answer->id}}">{{$answer->chinese}}</h5>
            </div>
          </div>
        </label>
      </div>
      @endforeach
    </div>
  <input type="button" onclick="clickTN('{{$question}}','{{ $vocabulary }}')" class="btn btn-info btn-block" name="check" value="KIỂM TRA">
  </form>
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