@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center;">THÊM BÀI HỌC</h2> <br>
    <form action="/lesson/insert" method="POST">
      @csrf
        <div class="row">
            <div class="col-sm-2">    
              <h3 for="usr">Tên:</h3>
            </div>
            <div class="col-sm-10">    
              <input name="name" class="form-control" type="text" value=""><br>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2"> 
              <h3 for="usr">theme:</h3>
            </div>
          <div class="col-sm-10">
            <select class="form-control" name="theme" id="sel1">
              @foreach ($theme as $th)
              <option value="{{$th->id}}">{{$th->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <br> 
        <div class="row">
            <div class="col-sm-2"> 
              <h3 for="usr">description:</h3>
            </div>
          <div class="col-sm-10">
            <input name="description" class="form-control" type="text">
          </div>
        </div>
        <br>
          <input type="submit" class="btn btn-primary" name="check" value="thêm">
    </form>
</div>
@endsection