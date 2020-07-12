@extends('layout.app')
@section('body')
<link rel="stylesheet" type="text/css" href="{{asset('css/learnbytype.css')}}" media="screen" />
<script>
  window.setTimeout(function() {
$(".alert").fadeTo(500, 0).slideUp(500, function(){
  $(this).remove(); 
});
}, 2000); 
</script>
<div class="container">
    <h2 style="text-align: center;">THÊM BÀI HỌC</h2> <br>
    <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Câu trả lời:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="name" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">    
          <h3 for="usr">Mô tả:</h3>
        </div>
        <div class="col-sm-9">    
          <input name="description" class="form-control" type="text" value=""><br>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">    
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> is corred
            </label>
          </div>
        </div>
      </div>
</div>
@endsection