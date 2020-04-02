@extends('layout.app')
@section('body')
<div class="container">
<h3 style="text-align: center;">Điền vào chỗ trống và trả lời câu hỏi</h3>
 <form action="/learn/check" method="POST">
  @csrf
  @foreach ($answers as $lV)
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" value="{{$lV->id}}" name="test"> {{$lV->name}}
        </label>
      </div>
  @endforeach
<input type="submit" value="Submit">
</form> 
</div>
@endsection