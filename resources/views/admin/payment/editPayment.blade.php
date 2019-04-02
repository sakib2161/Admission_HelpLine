@extends('admin.master')

@section('content')


<div class="container">
	<div class="row">
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
		<div class="col-lg-6" style="margin: 20px">
			
          <form id="contact_form" action="{{url('/payment/update')}}" method="post">
          	@csrf
            <div class="alert alert-success">
              <h4 class="text-center">Add Payment Info</h4>
            </div>
              
         <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Project Name:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="date" name="projectName" value="{{$customers->projectName}}" required>
                 <input type="hidden"  class="form-control" id="date" name="id" value="{{$paymentById->id}}">
                
                 <span class="text-danger">  {{$errors->has('projectName')?$errors->first('projectName'):""}}</span>
              </div>
            </div><br><br>


<div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Company Name:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="date" name="companyName" value="{{$customers->companyName}}" required>
                 <span class="text-danger">  {{$errors->has('companyName')?$errors->first('companyName'):""}}</span>
              </div>
            </div><br><br>


           <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Initial Fee:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="date" name="initialFee" value="{{$customers->initialFee}}" required>
                 <span class="text-danger">  {{$errors->has('initialFee')?$errors->first('initialFee'):""}}</span>
              </div>
            </div><br><br>


              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Date:</label>
              <div class="col-sm-9"> 
                <input type="date"  class="form-control" id="date" name="date" value="{{$paymentById->date}}" placeholder=" Date" required>
                 <span class="text-danger">  {{$errors->has('date')?$errors->first('date'):""}}</span>
              </div>
            </div><br><br>
              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Amount:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="amount" name="amount"  value="{{$paymentById->amount}}"  placeholder="Amount" required>
                 <span class="text-danger">  {{$errors->has('amount')?$errors->first('amount'):""}}</span>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Description:</label>
              <div class="col-sm-9"> 
                <textarea   class="form-control" id="description" name="description"  value="{{$paymentById->description}}"  placeholder="Description" style="height: 80px" required>{{$paymentById->description}}</textarea> 
                 <span class="text-danger">  {{$errors->has('amount')?$errors->first('amount'):""}}</span>
              </div>
            </div><br><br><br><br>

            <div class="form-group"> 
              <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" id="submit_contact_form" class="btn btn-success">Update Payment</button>
              </div>
            </div>
          </form>



</div>


</div>

	</div>

  

@endsection
