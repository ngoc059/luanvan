@extends('layout.app')
@section('body')

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('css/timeline.css')}}" />

</head>
<div class="container">
  <div class="timeline" onload="loadImage()">
    
    {{-- @foreach ($themess as $index => $status)
    {{ json_encode($status) }}
    <br>
    @endforeach --}}
    @foreach ($themess as $index => $status)
    {{-- <br>
    {{ json_encode($status) }}
    {{ $status['listLesson'][0]['name'] }}
    <br> --}}
    @if ($status['index'] == 0)
    <div class="containerTimeLine left">
      <div class="contentTimeLine">
        <button type="button" class="collapsible">CHỦ ĐỀ: {{ $status['themeName'] }}</button>
        <div class="content">
          <div>BÀI HỌC</div>
          @foreach ($status['listLesson'] as $i => $value)
          <div class="lesson mt-1"> <a class="btn btn-info btn-lg active" href="{{ url('/learn/get-list-question-by-lesson',$value['lessonId']) }}"><i style='font-size:24px' class='fas'>&#xf5da;</i>
          </a> 
            <span>{{ $value['name'] }}</span>
            <span> {{ $value['dateDone'] }}</span></div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
    @if ($status['index'] == 1)
    <div class="containerTimeLine right">
      <div class="contentTimeLine">
        <button type="button" class="collapsible">CHỦ ĐỀ: {{ $status['themeName'] }}</button>
        <div class="content">
          <div>BÀI HỌC</div>
          @foreach ($status['listLesson'] as $i => $value)
          <div class="lesson mt-1"> <a class="btn btn-info btn-lg active" href="{{ url('/learn/get-list-question-by-lesson',$value['lessonId']) }}"><i style='font-size:24px' class='fas'>&#xf5da;</i>
          </a> 
            <span>{{ $value['name'] }}</span>
            <span> {{ $value['dateDone'] }}</span></div>
            @endforeach
        </div>
      </div>
    </div>
    @endif
    @endforeach
  </div>
</div>

<script>
  var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
    </script>

@endsection