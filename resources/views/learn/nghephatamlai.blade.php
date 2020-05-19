
@extends('main.mainlearn')
@section('mainlearn')

    <div class="container">
      <label for="Speech Recognition">Speech Recognition</label>

        <div class="row">
            <div class="col-sm-2"> 
              <h3 for="usr">Mô tả:</h3>
            </div>
          <div class="col-sm-10">
            <input  name="" id="speechToText" placeholder="Speak Something" onclick="record()" class="form-control" type="text">
          </div>
        </div>
        <div class="row mt-3 mb-3 pb-3 justify-content-center">
          <button style='font-size:24px'  type="button" onclick="readOutLoud('我爱你')" class="btn btn-outline-info" ><i class='fas fa-volume-up'></button>
        </div>
    </div>
@endsection