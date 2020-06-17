@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">DANH SÁCH LOẠI TỪ VỰNG</h2>
    <div class="row mt-3 mb-3 pb-3 justify-content-end">
      <a href="{{ url('/type/view-type')}}" class="btn btn-info" role="button" aria-pressed="true">Thêm</a>
    </div>   
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