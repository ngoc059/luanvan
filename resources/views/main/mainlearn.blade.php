@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('css/learn.css')}}" media="screen" />
@section('body')
<div class="container">
  <h1 style="text-align: center; text-shadow: 2px 2px 5px #B40486;"> BÀI HỌC </h1>
  <div class="bg-insert" style="margin-bottom: 40px; margin-top: 40px;">
    @yield('mainlearn')
  </div>
</div>
<div>
  <section class="content-item" id="comments">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <form action="">
            <h3 class="pull-left">Thêm Bình Luận</h3>&nbsp;
            <fieldset>
              <div class="row">
                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                  <textarea class="form-control" id="message" placeholder="Bình luận của bạn"></textarea>
                </div>
              </div>
            </fieldset>
            <button type="button"  class="btn btn-info" >Thêm</button>
          </form>

          <h3>Bình Luận <i class="fa fa-pencil-square-o" ></i></h3 >

          {{-- <!-- COMMENT 1 - START -->
          @if (sizeof(Session::get('listComment')) > 0)
          @foreach ( Session::get('listComment') as $item)
          <div class="media">
            <a class="pull-left" href="#">
            @if ($item->gender == 1)
            <img class="media-object"
            src={{ asset('images/nguyvotien.jpg')}} alt="">
            @endif

            @if ($item->gender == 0)
            <img class="media-object"
            src={{ asset('images/phuongcuu.jpg')}} alt="">
            @endif
            </a>
            <div class="media-body">
            <h4 class="media-heading">{{$item->userName}}</h4>
            <p> {{$item->comment}}</p>
              <ul class="list-unstyled list-inline media-detail pull-left">
              <li><i class="fa fa-calendar"></i>{{$item->created_at}}</li>
              </ul>
            </div>
          </div> 
          @endforeach
          @endif --}}
          <!-- COMMENT 1 - END -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection