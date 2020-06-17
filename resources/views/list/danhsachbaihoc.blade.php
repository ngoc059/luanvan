@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">DANH SÁCH BÀI HỌC</h2>
  
  <div class="row mt-3 mb-3 pb-3 justify-content-end">
    <a href="{{ url('/lesson/lesson-add')}}" class="btn btn-info" role="button" aria-pressed="true">Thêm</a>
  </div>
    <table class="table table-striped" >
      <thead>
        @csrf
        @method('delete')
        <tr>
          <th>Mã</th>
          <th>Bài Học</th>
          <th>Hoàn Thành</th>
          <th>Sửa</th>
          <th>Xóa</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($lesson as $item)  

        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          
          @if ($item->is_finish == 0)
          <td>Chưa hoàn thành!</td>
        @endif
        @if ($item->is_finish == 1)
        <td> Đã hoàn thành!</td>
        @endif
   
       
    
          <td> <a href="/lesson/update/{{$item->id}}"><i class="fas fa-edit"></i></a></td>
        <td><a href="/lesson/delete/{{$item->id}}"><i class="fas fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection