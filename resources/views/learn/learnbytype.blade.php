@extends('main.mainlearn')
@section('mainlearn')
    <div class="container">
      <h3 style="text-align: center;">Chọn từ có nghĩa là: {{$tq->vietnamese}} </h3>
    <form action="/learn/check/{{$tq->id}}" method="POST">
        @csrf
        <br>
        <div class="row row-cols-3 row-cols-md-4">
              @foreach ($listV as $lV)
              <div class="col mb-4">
                <label>
                <div class="card h-100">
                    <input type="radio" name="test" value="{{$lV->id}}" checked>
                    <img onclick="onClick({{$lV->id}})" src="{{ asset('image/cat.jpg') }}" class="card-img-top">
                  <div class="card-body">
                    <h5 class="card-title" id="{{$lV->id}}">{{$lV->chinese}}</h5>
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