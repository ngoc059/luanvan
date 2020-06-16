@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">DANH SÁCH CHỦ ĐỀ</h2>
    <div class="row mt-3 mb-3 pb-3 justify-content-end">
      <button type="submit" class="btn btn-outline-info" >Thêm</button>
    </div>       
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Mã</th>
          <th>Chủ đề</th>
          <th>Sửa</th>
          <th>Xóa</th>

        </tr>
      </thead>
      <tbody>
        @foreach ($theme as $item)  
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