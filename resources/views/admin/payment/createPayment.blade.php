@extends('admin.master')

@section('content')


<div class="container">
	<div class="row">
    <h3 class="text-center text-success">{{Session::get('message')}}</h3>
		<div class="col-lg-6" style="margin: 20px">
			
          <form id="contact_form" action="{{url('/payment/save')}}" method="post">
          	@csrf
            <div class="alert alert-success">
              <h4 class="text-center">Add Payment Info</h4>
            </div>
            

             <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Select Customer:</label>
              <div class="col-sm-9"> 
                <select name="customerId" id="customerId" class="form-control">
                  @foreach($customers as $customer)
                   <option value="{{$customer->id}}">{{$customer->customerName}}</option>
                  @endforeach
              </select>
                 <span class="text-danger">  {{$errors->has('subscription_fee')?$errors->first('subscription_fee'):""}}</span>
              </div>
            </div><br><br><br>



              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd"> Date:</label>
              <div class="col-sm-9"> 
                <input type="date"  class="form-control" id="date" name="date" placeholder=" Date" required>
                 <span class="text-danger">  {{$errors->has('date')?$errors->first('date'):""}}</span>
              </div>
            </div><br><br>
              <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Amount:</label>
              <div class="col-sm-9"> 
                <input type="number"  class="form-control" id="amount" name="amount" placeholder="Amount" required>
                 <span class="text-danger">  {{$errors->has('amount')?$errors->first('amount'):""}}</span>
              </div>
            </div><br><br>

            <div class="form-group">
              <label class="control-label col-sm-3" for="pwd">Description:</label>
              <div class="col-sm-9"> 
                <textarea   class="form-control" id="description" name="description" placeholder="Description" style="height: 80px" required></textarea> 
                 <span class="text-danger">  {{$errors->has('amount')?$errors->first('amount'):""}}</span>
              </div>
            </div><br><br><br><br>

            <div class="form-group"> 
              <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" id="submit_contact_form" class="btn btn-success">Add Payment</button>
              </div>
            </div>
          </form>



</div>


</div>

	</div>

  <div id="result"></div>

<script type="text/javascript">

$(document).ready(function () {   
       
    $("#submit_contact_form").click(function() {   
        var loginForm = $("#contact_form");
        loginForm.submit(function(e){
        e.preventDefault();
        var formData = loginForm.serialize();

            $.ajax({
                url:'{{url('/payment/save')}}',
                type:'post',
                data:formData,
                success:function (data){
                    //alert(data.message);
                    $('#customerId').val('');
                    $('#date').val('');
                    $('#amount').val('');
                    $('#description').val('');
                    $('#result').empty();
                    $('#result').addClass( 'alert alert-'+data.class+' alert-dismissible' );
                    $('#result').append('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'+data.message+'</strong>'); 
                },
                error: function (data) {
                    $('#Error').text('Error occured.');
                }
            });
        });
    });
});    

  </script>
  

@endsection
