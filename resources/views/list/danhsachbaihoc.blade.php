@extends('layout.app')
@section('body')
<div class="container">
    <h2>DANH SÁCH BÀI HỌC</h2>
                
    <table class="table table-striped">
      <thead>
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
   
       
    
          <td><i class="fas fa-edit"></i></td>
          <td><i class="fas fa-trash"></i></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection