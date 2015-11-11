@extends('shared.app')
  
  @section('additional_include')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  @endsection

  @section('script')
    @include('book._PassengerJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    
    <div class="container-fluid">
      <div id="dialog">
        <p>The total payment is RM {!! ($cabin_price + $package_price) !!}. Do you want to confirm this payment?</p>
      </div>
      <div class="col-md-10 col-md-offset-1">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="/booking">Seacrh Cruise Package</a></li>
          <li><a href="/booking/{!! $package !!}">Select Cabin</a></li>
          <li class="active">Passenger Information</li>
        </ol>
        <hr/>
        <form class="form-horizontal" method="post" id="PassengerForm">
          <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
          <div class="form-group">
            <label class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtFirstName" name="txtFirstName" placeholder="First Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">IC</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="txtIC" name="txtIC" placeholder="IC">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Gender</label>
            <div class="col-sm-10">
              <label class="radio-inline"><input type="radio" name="optGender" value="M" checked>Male</label>
              <label class="radio-inline"><input type="radio" name="optGender" value="F">Female</label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Date Of Birth</label>
            <div class="col-sm-10">
              <input type="text" id="dateDOB" name="dateDOB" class="form-control" placeholder="Date Of Birth"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="txtAddress" name="txtAddress" placeholder="Address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12" align="center">
              <button type="submit" id="submitPassenger" name="submitPassenger" class="btn btn-default">Confirm</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    
  @endsection