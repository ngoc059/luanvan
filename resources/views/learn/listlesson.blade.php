@extends('layout.app')
@section('body')
<div class="container">
  @foreach ($lessons as $lesson)
      <div class="row">
        <div class="col-sm-2">    
          <h3 for="usr">{{$lesson->name}}</h3>
        </div>
        <div class="col-sm-10">    
          <a href="/learn/get-list-question-by-lesson/{{$lesson->id}}">{{$lesson->description}}</a>
        </div>
      </div>
  @endforeach
@endsection