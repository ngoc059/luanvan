@extends('layout.app')
@section('title')
    Mun
@endsection
@section('body')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4">
            <div class="col mb-4">
              <div class="card h-100">
                <img onclick="onClick()" src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title" id="test1" >Card title</h5>
                  {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title" >Card title</h5>
                  {{-- <p class="card-text">This is a short card.</p> --}}
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> --}}
                </div>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card h-100">
                <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                </div>
              </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              @foreach ($hanghoa as $hh)
              <div class="col mb-4">
                <div class="card h-100">
                  <img src="{{ asset('image/cat.jpg') }}" class="card-img-top" >
                  <div class="card-body">
                    <h5 class="card-title">{{$hh->chinese}}</h5>
                    {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                  </div>
                </div>
              </div>
              @endforeach
              
          </div>
          
    </div>  

@endsection