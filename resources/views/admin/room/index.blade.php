
@extends('admin.master')


@section('content')


 <!-- /.box -->
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
          <div class="box">
            <div class="box-header">
              <h3 style="color: green">Room Details info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Hotel name</th>
                  <th>Image</th>
                  <th>Price</th>
                  <th>Number of room</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($rooms as $room)
               <tr>
               
                <td>{{$room->name}}</td>
                <td>{{$room->hotel_name}}</td>
                <td><img src="{{$room->image}}" height="60px" width="60px"></td>
                <td>{{$room->price}}</td>
                <td>{{$room->number_of_room}}</td>

                 <td>
                     <a href="{{url('/room/edit/'.$room->id)}}" class="btn btn-success">
                       
                       <i class="fa fa-fw fa-edit"></i> Edit
                     </a>
                    <a href="{{url('/room/destroy/'.$room->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delet this');">
                       
                       <i class="fa fa-fw fa-table"></i>Delete 
                     </a>
                   </td>
               </tr>
               @endforeach
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>

          <!-- /.box -->


        @endsection