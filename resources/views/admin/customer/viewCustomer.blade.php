@extends('admin.master')
@section('content')
<div class="container">
      <div class="row">

          <div class="col-md-5"><br><br>
         
          		<div class="alert alert-success">
              <h4>Personal info</h4>
            </div>
<div class="well">
<div class="row" style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Name:</label>  <div class="col-sm-9">      {{$customers->companyName}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Address:</label>  <div class="col-sm-9">      {{$customers->customerAddress}}</div></div>
            <div class="row"style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Phone No:</label>  <div class="col-sm-9">      {{$customers->customerPhoneNo}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Birth Date:</label>  <div class="col-sm-9">      {{$customers->birthDate}}</div></div>
            <div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Nationality:</label>  <div class="col-sm-9">      {{$customers->nationality}}</div></div>
</div>

          </div>


           <div class="col-md-5"><br><br>
    	
    		<div class="alert alert-success">
              <h4>Company info</h4>
            </div>

<div class="well">
          <div class="row" style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Name:</label>  <div class="col-sm-9">      {{$customers->companyName}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Address:</label>  <div class="col-sm-9">      {{$customers->companyAddress}}</div></div>
            <div class="row"style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Phone No:</label>  <div class="col-sm-9">      {{$customers->companyPhoneNo}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> City:</label>  <div class="col-sm-9">      {{$customers->city}}</div></div>

             <div class="row" style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Country:</label>  <div class="col-sm-9">      {{$customers->country}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Email:</label>  <div class="col-sm-9">      {{$customers->companyEmail}}</div></div>
            <div class="row"style="margin: 20px">
          <label class="control-label col-sm-3 " for="email"> Website:</label>  <div class="col-sm-9">      {{$customers->website}}</div></div>
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Registration Date:</label>  <div class="col-sm-9">      {{$customers->registrationDate}}</div></div>

           
<div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Project Name:</label>  <div class="col-sm-9">      {{$customers->projectName}}</div></div>

            <div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Initial Fee:</label>  <div class="col-sm-9">      {{$customers->initialFee}}</div></div>

            <div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> Subscription Fee:</label>  <div class="col-sm-9">      {{$customers->subscription_fee}}</div></div>

            <div class="row" style="margin: 20px">
            <label class="control-label col-sm-3 " for="email"> EMI Date:</label>  <div class="col-sm-9">      {{$customers->emiDate}}</div></div>

       
          </div>
        </div>

      </div>
</div>

@endsection