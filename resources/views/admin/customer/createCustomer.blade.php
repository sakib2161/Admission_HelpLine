@extends('admin.master')

@section('content')


<div class="container">
	<div class="row">
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
		<div class="col-lg-6">
			
          <form class="form-horizontal" method="POST" action="{{ url('/customer/save') }}">
          	@csrf
            <div class="alert alert-success">
              <h4>Personal info</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="email"> Name:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" name="customerName" id="email" placeholder="Customer Name" required>
              <span class="text-danger">  {{$errors->has('customerName')?$errors->first('customerName'):""}}</span>
                                              
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Address:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="customerAddress" placeholder="Customer Address" required>
                 <span class="text-danger">  {{$errors->has('customerAddress')?$errors->first('customerAddress'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Phone No:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="pwd" name="customerPhoneNo" placeholder="Customer Phone No" required>
                 <span class="text-danger">  {{$errors->has('customerPhoneNo')?$errors->first('customerPhoneNo'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Birth Date:</label>
              <div class="col-sm-9"> 
                <input type="date"  class="form-control" id="pwd" name="birthDate" placeholder="Birth Date" required>
                 <span class="text-danger">  {{$errors->has('birthDate')?$errors->first('birthDate'):""}}</span>
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Nationality:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="nationality" placeholder="Nationality" required>
                 <span class="text-danger">  {{$errors->has('nationality')?$errors->first('nationality'):""}}</span>
              </div>
            </div>

            <div class="alert alert-success">
              <h4>Comapany info</h4>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Name:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="companyName" placeholder="Company Name" required>
                 <span class="text-danger">  {{$errors->has('companyName')?$errors->first('companyName'):""}}</span>
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Address:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="companyAddress" placeholder="Company Address" required>
                 <span class="text-danger">  {{$errors->has('companyAddress')?$errors->first('companyAddress'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Phone No:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="pwd" name="companyPhoneNo" placeholder="Company Phone No" required>
                 <span class="text-danger">  {{$errors->has('companyPhoneNo')?$errors->first('companyPhoneNo'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">City:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="city" placeholder="City" required>
                 <span class="text-danger">  {{$errors->has('city')?$errors->first('city'):""}}</span>
              </div>
            </div>

               <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Country:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="country" placeholder="Country" required>
                 <span class="text-danger">  {{$errors->has('country')?$errors->first('country'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Email:</label>
              <div class="col-sm-9"> 
                <input type="email"  class="form-control" id="pwd" name="companyEmail" placeholder="Company Email" required>
                 <span class="text-danger">  {{$errors->has('companyEmail')?$errors->first('companyEmail'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Website:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="website" placeholder="Website">
                 <span class="text-danger">  {{$errors->has('website')?$errors->first('website'):""}}</span>
              </div>
            </div>

              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Project Name:</label>
              <div class="col-sm-9"> 
                <input type="text"  class="form-control" id="pwd" name="projectName" placeholder="Project Name" required>
                 <span class="text-danger">  {{$errors->has('projectName')?$errors->first('projectName'):""}}</span>
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Initial Fee:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="pwd" name="initialFee" placeholder="Initial Fee" required>
                 <span class="text-danger">  {{$errors->has('initialFee')?$errors->first('initialFee'):""}}</span>
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Subscription Fee:</label>
              <div class="col-sm-9"> 
                <select name="subscription_fee" class="form-control">
                   <option value="monthly">Monthly</option>
                    <option value="yearly">Yearly</option>
              </select>
                 <span class="text-danger">  {{$errors->has('subscription_fee')?$errors->first('subscription_fee'):""}}</span>
              </div>
            </div>



              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Registration Date:</label>
              <div class="col-sm-9"> 
                <input type="date"  class="form-control" id="pwd" name="registrationDate" placeholder="Registration Date" required>
                 <span class="text-danger">  {{$errors->has('birthDate')?$errors->first('birthDate'):""}}</span>
              </div>
            </div>
              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">EMI Date:</label>
              <div class="col-sm-9"> 
                <input type="date"  class="form-control" id="pwd" name="emiDate" placeholder="EMI Date" required>
                 <span class="text-danger">  {{$errors->has('emiDate')?$errors->first('emiDate'):""}}</span>
              </div>
            </div>

            <div class="form-group"> 
              <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-success">Add Customer</button>
              </div>
            </div>
          </form>

</div>


</div>

	</div>

@endsection
