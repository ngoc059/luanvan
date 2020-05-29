@extends('layout.app')
@section('body')
<div class="container">
    <h2>DANH SÁCH LOẠI TỪ VỰNG</h2>
                
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Mã</th>
          <th>Loại Từ Vựng</th>
          <th>Sửa</th>
          <th>Xóa</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($vocabulary as $item)  
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td><i class="fas fa-edit"></i></td>
          <td><i class="fas fa-trash"></i></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection