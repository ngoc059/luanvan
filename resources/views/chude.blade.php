@extends('layout.app')
@section('body')
<div class="container">
    <div class="row">
        @foreach ($theme as $t)
        <div class="col-md-4 mb-5">
        <a href="{{ url('lesson/get',$t->id) }}">
            <div class="card">
            <img class="card-img-top" src="{{ asset('image/cat.jpg') }}" alt="Card image" style="width:100%">
                <div class="card-body">
                <h1 class="text-secondary text-center">{{ $t->name }}</h1>
                  <p class="card-text"></p>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
  </div>
@endsection