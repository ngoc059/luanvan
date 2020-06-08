@extends('layout.app')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/comment.css') }}">
@section('body')
<div class="container">
  <h1> LEARN </h1>
  <div style="margin-bottom: 40px; margin-top: 40px;">
    @yield('mainlearn')
  </div>
</div>
<div>
  <section class="content-item" id="comments">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <form action="">
            <h3 class="pull-left">New Commets</h3>
            <button type="submit" class="btn btn-normal pull-right">Submit</button>
            <fieldset>
              <div class="row">
                <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                  <textarea class="form-control" id="message" placeholder="Your message"></textarea>
                </div>
              </div>
            </fieldset>
          </form>

          <h3>Comments</h3>

          <!-- COMMENT 1 - START -->
          @foreach ( Session::get('listComment') as $item)
          <div class="media">
            <a class="pull-left" href="#"><img class="media-object"
                src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
            <div class="media-body">
            <h4 class="media-heading">{{$item->userName}}</h4>
            <p> {{$item->comment}}</p>
              <ul class="list-unstyled list-inline media-detail pull-left">
              <li><i class="fa fa-calendar"></i>{{$item->created_at}}</li>
              </ul>
            </div>
          </div> 
          @endforeach

          <!-- COMMENT 1 - END -->
        </div>
      </div>
    </div>
  </section>
</div>
@endsection