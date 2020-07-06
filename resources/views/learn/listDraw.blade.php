@extends('main.mainlearn')
@section('mainlearn')
<div class="containers">
    @foreach ($listDraw as $imgDra)
<p>{{$listDraw}}</p>
    {{-- <img  src=" --}}
    {{-- < echo asset("$imgDra->imgDraw") ?> --}}
    {{-- " --}}
     {{-- class="card-img-top"> --}}
    @endforeach    
</div>
@endsection