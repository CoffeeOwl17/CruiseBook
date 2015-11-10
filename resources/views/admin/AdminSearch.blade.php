@extends('shared.app')
  
  @section('additional_include')
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    
  @endsection

  @section('script')
    @include('admin._AdminSearchJs')
  @endsection

  @section('content')
    @include('admin.admin')

    <div class="col-md-8 col-md-offset-2">
      @if(Session::has('message'))
      <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
      @endif
      <ol class="breadcrumb">
        <li>Cruise Management</li>
        <li>{!! ucfirst($action) !!}</li>
        <li class="active">Search Cruise</li>
      </ol>
      <hr/>
      <table id="package_table" border="0">
        <thead>
          <tr>
            <th>Package</th>
            <th>Departure Date</th>
            <th>Departure</th>
            <th>Arrival Date</th>
            <th>Arrival</th>
            <th>Cruise</th>
          </tr>
        </thead>
        <tbody>
        <?php $count = 0?>
        @foreach($packages as $package)
          <tr>
            <td><a href="/{!! $action !!}/{!! $package->id !!}">{!! $package->package_name !!}</a></td>
            <td>{!! $package->departure_date !!}</td>
            <td>{!! $package->departure_location !!}</td>
            <td>{!! $package->arrival_date !!}</td>
            <td>{!! $package->arrival_location !!}</td>
            <td>{!! $package->cruise->cruise_name !!}</td>
          </tr>
          <?php $count++?>
        @endforeach
        </tbody>
      </table>
    </div>
  @endsection