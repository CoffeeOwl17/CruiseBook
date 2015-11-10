@extends('shared.app')
  
  @section('additional_include')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  @endsection

  @section('script')
    @include('admin._AdminAddJs')
  @endsection


  @section('content')
    @include('admin.admin')

    <div class="col-md-8 col-md-offset-2">
      @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
      @endif
      <ol class="breadcrumb">
        <li>Cruise Management</li>
        <li class="active">Add New Cruise</li>
      </ol>
      <hr/>
      <form class="form-horizontal" id="addCruise" method="post">
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
        <div class="form-group">
          <label class="col-sm-2 control-label">Cruise Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputCruise" name="inputCruise" placeholder="Cruise name...">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Departure Date</label>
          <div class="col-sm-10">
            <input type="text" id="datepicker-from" name="datepicker-from" class="form-control" placeholder="Departure date..."/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Arrival Date</label>
          <div class="col-sm-10">
            <input type="text" id="datepicker-until" name="datepicker-until" class="form-control" placeholder="Arrival date..."/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Departure Location</label>
          <div class="col-sm-10">
            <input type="text" id="departureLocation" name="departureLocation" class="form-control" placeholder="Departure location..."/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Arrival Location</label>
          <div class="col-sm-10">
            <input type="text" id="arrivalLocation" name="arrivalLocation" class="form-control" placeholder="Arrival location..."/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">Cruise</label>
          <div class="col-sm-10">
            <select id="cruiseID" name="cruiseID" class="form-control">
            @foreach ($cruises as $cruise)
              <option value='{!! $cruise->cruise_id !!}'>{!! $cruise->cruise_name !!}</option>
            @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-default">Add</button>
          </div>
        </div>
      </form>
    </div>
  @endsection