
@extends('admin.master')


@section('content')


 <!-- /.box -->
         <h3 class="text-center text-success">{{Session::get('message')}}</h3>
          <div class="box">
            <div class="box-header">
              <h3 style="color: green">Hotel info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($hotels as $hotel)
               <tr>
               
                <td>{{$hotel->name}}</td>
                 <td>

                    <a href="{{url('/hotel/delete/'.$hotel->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delet this');">
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