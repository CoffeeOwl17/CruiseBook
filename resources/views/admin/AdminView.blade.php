@extends('shared.app')
  
  @section('additional_include')
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  @endsection

  @section('script')
    
  @endsection


  @section('content')
    @include('admin.admin')

    <div class="col-md-8 col-md-offset-2">
      <ol class="breadcrumb">
        <li>Cruise Management</li>
        <li>View</li>
        <li class="active">Cruise Package: {!! $package->package_name !!}</li>
      </ol>
      <hr/>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Cruise Name</th>
            <th>Departure Date</th>
            <th>Departure</th>
            <th>Arrival Date</th>
            <th>Arrival</th>
            <th>Cruise</th>
          <tr>
        </thead>
        <tbody>
          <tr>
            <td>{!! $package->package_name!!}</td>
            <td>{!! $package->departure_date!!}</td>
            <td>{!! $package->departure_location!!}</td>
            <td>{!! $package->arrival_date!!}</td>
            <td>{!! $package->arrival_location!!}</td>
            <td>{!! $package->cruise->cruise_name!!}</td>
          </tr>
        </tbody>
      </table>
      <form class="form-horizontal" id="addCruise" action="/search/view">
        <input name="_token" type="hidden" value="{!! csrf_token() !!}" />
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <button type="submit" class="btn btn-default">Back</button>
          </div>
        </div>
      </form>
    </div>
  @endsection