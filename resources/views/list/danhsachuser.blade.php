@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">{{$title}}</h2>
    {{-- <div class="row mt-3 mb-3 pb-3 justify-content-end">
      <button type="submit" class="btn btn-info" >Thêm</button>
    </div>        --}}
    <table class="table table-striped" >
      <thead>
        <tr>
          <th>Mã</th>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Ngày sinh</th>
          <th>Giới tính</th>
          <th>Sửa</th>
          <th>Xóa</th>


        </tr>
      </thead>
      <tbody>
        @foreach ($listUser as $item)  
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->full_name}}</td>
          <td>{{$item->birthday}}</td>
          <td>{{$item->email}}</td>     
          @if ($item->gender == 0)
          <td>nữ</td>
          @endif    
          @if ($item->gender == 1)
          <td>nam</td>
          @endif

          <td><i class="fas fa-edit"><a href="#"></a></i></td>
        <td><a href="/user/delete/{{$item->id}}"><i class="fas fa-trash"></i> </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection