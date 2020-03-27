@extends('layout.app')
@section('body')
<div class="container">
<h3 style="text-align: center;">Điền vào chỗ trống và trả lời câu hỏi</h3>
 <form action="/action_page.php">
@foreach ($listV as $lV)
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optradio"> Option 1
      </label>
    </div>
@endforeach
<input type="submit" value="Submit">
</form> 
</div>
@endsection