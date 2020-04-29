
@extends('layout.app')

@section('body')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script>
    $(function () {
      var elem = document.getElementById("myBar");   
      var elem1 = document.getElementById("setLevel");   
      var width = "<?php echo $percent; ?>";
      var id = setInterval(frame, 10);
      var experience = "<?php echo $experience; ?>";
      function frame() {
        if (width >= experience) {
          clearInterval(id);
        } else {
          width++; 
          elem.style.width = width + '%'; 
          elem.innerHTML = width * 1  + '%';
          if(width > 100 && experience > 100) {
            width = 0;
            experience = experience - 100;
            elem1.innerText  = ("<?php echo $level; ?>" + 1) + " level up";
          }
        }
      }
    })
  </script>
</head>
<body>

<div class="container justify-content-center">
    <div  id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-between">
          <h4 class="modal-title text-center">Đã Hoàn Thành</h4>
        </div>
        <div class="modal-header justify-content-between">
        <h5 id="setLevel" class="modal-title text-center">{{ $level }}</h5>
        </div>
        <div class="w3-light-grey w3-round-xlarge mx-4">
          <div id="myBar" class="w3-container w3-greenw3-container w3-blue w3-round-xlarge" style="width:{{$percent}}%">{{$percent}}%</div>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" href="/lesson/lesson-list" class="btn btn-default" data-dismiss="modal">
            <a href="/lesson/lesson-list">OK</a>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
@endsection