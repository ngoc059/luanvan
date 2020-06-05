@extends('layout.app')
@section('body')

@if(isset($nguoidung))

<div class="well">
    @if(session('thongbao'))
        {{session('thongbao')}}
    @endif
    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
<form action="comment/ {{$tintuc->id}}" method="post" role="form">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="form-group">
            <textarea class="form-control" name="NoiDung" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>
<hr>
@endif

@endsection