@extends('layout.app')
@section('body')
<div class="container">
  <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">DANH SÁCH BÀI HỌC</h2>

  <div class="row mt-3 mb-3 pb-3 justify-content-end">
    <a href="{{ url('/lesson/lesson-add')}}" class="btn btn-info" role="button" aria-pressed="true">Thêm</a>
  </div>
  <div class="row">
    <div class="col-3 mb-3">
      <select class="form-control" name="theme" id="theme-list-lesson">
        @foreach ($theme as $th)
        <option value="{{$th->id}}">{{$th->name}}</option>
        @endforeach
      </select>
     </div>
  </div>
  <table class="table table-striped">
    <thead>
      @csrf
      @method('delete')
      <tr>
        <th>Mã</th>
        <th>Bài Học</th>
        <th>Thêm câu hỏi</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody id="tableLesson">
      
    </tbody>
  </table>
</div>
@endsection