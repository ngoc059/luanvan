@extends('main.main')
@section('maininsert')
<div class="container">
    <h2> THÊM CÂU NGHE VIẾT RỒI VIẾT LẠI </h2>
    <form action="#" method="POST">
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">câu trả hỏi</h3>
        </div>
        <div class="col-sm-9">    
          <input name="cautraloi" class="form-control" type="text" value=""><br>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">audio</h3>
        </div>
        <div class="col-sm-9">    
            <input type="file" class="form-control-file border">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Check</button>
      <form>
</div>
@endsection