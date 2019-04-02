
@extends('admin.master')


@section('content')


 <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 style="color: green">Customer Details info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Customer Name</th>
                  <th>Customer Address</th>
                  <th>Company Name</th>
                  <th>Company Address</th>
                  <th>Project Name</th>
                  <th>Registration Date</th>
                  <th>EMI Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($customers as $customer)
               <tr>
               
                <td>{{$customer->customerName}}</td>
                <td>{{$customer->customerAddress}}</td>
                <td>{{$customer->companyName}}</td>
                <td>{{$customer->companyAddress}}</td>
                <td>{{$customer->projectName}}</td>
                <td>{{$customer->registrationDate}}</td>
                <td>{{$customer->emiDate}}</td>
                 <td>
                     <a href="{{url('/customer/edit/'.$customer->id)}}" class="btn btn-success">
                       
                       <i class="fa fa-fw fa-edit"></i> Edit
                     </a>
                    <a href="{{url('/customer/delete/'.$customer->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delet this');">
                       
                       <i class="fa fa-fw fa-table"></i>Delete 
                     </a>

                      <a href="{{url('/customer/view/'.$customer->id)}}" class="btn btn-info">
                       
                       <i class="fa fa-fw fa-eye"></i>View
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