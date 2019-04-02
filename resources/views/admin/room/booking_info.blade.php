
@extends('admin.master')


@section('content')


 <!-- /.box -->
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
          <div class="box">
            <div class="box-header">
              <h3 style="color: green">Booking info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Room</th>
                  <th>Hotel</th>
                  <th>Price</th>
                  <th>Tx id</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($booking_info as $info)
               <tr>
               
                <td>{{$info->name}}</td>
                <td>{{$info->email}}</td>
                <td>{{$info->address}}</td>
                <td>{{$info->room_name}}</td>
                <td>{{$info->hotel_name}}</td>
                <td>{{$info->price}}</td>
                <td>{{$info->tx_id}}</td>
                @if($info->status==1)
                <td class="btn btn-success">Confirm</td>
                @else
                <td class="btn btn-warning">Pending</td>
                @endif

                 <td>
                  <form class="form-horizontal" method="POST" action="{{ url('/booking/confirm') }}" enctype="multipart/form-data">
                   @csrf
                   <input type="hidden" name="id" value="{{$info->booking_id}}">
                   <button type="submit" class="btn btn-success">Confirm</button>
                 </form>
                    <a href="{{url('/booking/destroy/'.$info->booking_id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delet this');">
                       
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