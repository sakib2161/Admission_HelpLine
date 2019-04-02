@extends('admin.master')

@section('content')
<div class="container">
    <div class="row">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <div class="col-lg-6">
            <form class="form-horizontal" method="POST" action="{{ url('/hotel/save') }}" enctype="multipart/form-data">
                @csrf
                <div class="alert alert-success">
                    <h4>Hotel</h4>
                </div><br><br>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email"> Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="email" placeholder="hotel Name" required>
                        <span class="text-danger">  {{$errors->has('customerName')?$errors->first('customerName'):""}}</span>
                    </div>
                </div><br><br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                     <button type="submit" class="btn btn-success">Add hotel</button>
                    </div>
                </div>
            </form>
        </div>

@endsection
