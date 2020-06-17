@extends('layout.app')
@section('body')
<div class="container">
    <h2 style="text-align: center; text-shadow: 2px 2px 5px #B40486;" class="pt-3">DANH SÁCH TỪ VỰNG</h2>
  
  <div class="row mt-3 mb-3 pb-3 justify-content-end">
    <a href="{{ url('/vocabulary/view-vocabulary')}}" class="btn btn-info" role="button" aria-pressed="true">Thêm</a>
  </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Tiếng Trung Quốc</th>
          <th>Tiếng Việt</th>
          <th>Ví dụ tiếng TQ</th>
          <th>Ví dụ tiếng VN</th>
          

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