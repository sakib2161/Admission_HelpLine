
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
                  <th>Company Name</th>
                  <th>Project Name</th>
                  <th>Initial Fee</th>
                  <th>Total Amount</th>
                  <th>Payment Date</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
               @foreach($payments as $payment)
               <tr>
               
                <td>{{$payment->customerName}}</td>
                <td>{{$payment->companyName}}</td>
                <td>{{$payment->projectName}}</td>
                <td>{{$payment->initialFee}}</td>
                <td>{{$payment->amount}}</td>
                <td>{{$payment->date}}</td>
                <td>{{$payment->description}}</td>
                 <td>
                     <a href="{{url('/payment/edit/'.$payment->id)}}" class="btn btn-success">
                       
                       <i class="fa fa-fw fa-edit"></i> Edit
                     </a>
                    <a href="{{url('/payment/delete/'.$payment->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure to delet this');">
                       
                       <i class="fa fa-fw fa-table"></i>Delete 
                     </a>

                      <a href="{{url('/payment/view/'.$payment->id)}}" class="btn btn-info">
                       
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