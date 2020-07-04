@extends('main.mainlearn')
@section('mainlearn')
<div class="containers">
    @foreach ($listDraw as $imgDra)
    <img  src="<?php echo asset("image/imgDraw/img1") ?>" class="card-img-top">
    @endforeach    
</div>
@endsection