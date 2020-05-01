@extends('layout.app')
@section('body')
<div class="page-wrapper bg-gra-01 p-t-80 p-b-100 font-poppins">
    <div class="wrapper wrapper--w780">
        <div class="card card-3">
            <div class="card-heading"></div>
            <div class="card-body">
                <h2 class="title">Registration Info</h2>
                <form method="POST" action="/user/create">
                    @csrf
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Name" name="name">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                    </div>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="gender">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option value="0">Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="pass word" name="password">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3" type="text" placeholder="Phone" name="phone">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection