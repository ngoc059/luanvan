@extends('layout.app')
@section('body')
<div class="container">
    <h2> NGHE VIẾT RỒI VIẾT LẠI </h2>

    <i class='fas fa-bullhorn' style='font-size:24px'>H</i>
    <form action="#" method="POST">
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">câu trả lời</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Check</button>
      <form>
</div>
@endsection