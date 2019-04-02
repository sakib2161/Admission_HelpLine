@extends('admin.master')

@section('content')


<div class="container">
    <div class="row">
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
        <div class="col-lg-6">
            <form class="form-horizontal" method="POST" action="{{ url('/room/update') }}" enctype="multipart/form-data">
                @csrf
                <div class="alert alert-success">
                    <h4>Room</h4>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email"> Name:</label>
                    <div class="col-sm-9">
                        <input type="hidden" class="form-control" name="id" value="{{$room->id}}" id="email" placeholder="Room Name" required>
                        <input type="text" class="form-control" name="name" value="{{$room->name}}" id="email" placeholder="Room Name" required>
                        <span class="text-danger">  {{$errors->has('customerName')?$errors->first('customerName'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd"> Select Hotel:</label>
                    <div class="col-sm-9">
                        <select name="hotel_id" id="customerId" class="form-control">
                            @foreach($hotels as $hotel)

                            <option value="{{$hotel->id}}" {{$room->hotel_id==$hotel->id?'selected="selected"' : ''}} >{{$hotel->name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">  {{$errors->has('subscription_fee')?$errors->first('subscription_fee'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd"> Room Details:</label>
                    <div class="col-sm-9">
                        <textarea name="details" rows="4" cols="57">{{$room->details}}</textarea>
                        <span class="text-danger">  {{$errors->has('subscription_fee')?$errors->first('subscription_fee'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Image:</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="pwd" name="image" placeholder=" room image">
                        <span class="text-danger">  {{$errors->has('customerAddress')?$errors->first('customerAddress'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Price:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="{{$room->price}}"  id="pwd" name="price" placeholder="price" required>
                        <span class="text-danger">  {{$errors->has('customerPhoneNo')?$errors->first('customerPhoneNo'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd"> Number of room:</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="pwd" value="{{$room->number_of_room}}" name="number_of_room" placeholder="number of room" required>
                        <span class="text-danger">  {{$errors->has('customerPhoneNo')?$errors->first('customerPhoneNo'):""}}</span>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                     <button type="submit" class="btn btn-success">Add Room</button>
                    </div>
                </div>
            </form>
        </div>

@endsection
