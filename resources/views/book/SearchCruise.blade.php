@extends('shared.app')
  
  @section('additional_include')
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  @endsection

  @section('script')
    @include('book._SearchCruiseJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Seacrh Cruise Package</li>
        </ol>
        <hr/>
        <table id="cruise-table">
          <thead>
            <tr>
              <th>Package</th>
              <th>Departure Date</th>
              <th>Departure</th>
              <th>Arrival Date</th>
              <th>Arrival</th>
              <th>Price (RM)</th>
              <th>Cruise</th>
            </tr>
          </thead>
          <tbody>
          @foreach($packages as $package)
            <tr>
              <td><a href="booking/{!! $package->id !!}">{!! $package->package_name !!}</a></td>
              <td>{!! $package->departure_date !!}</td>
              <td>{!! $package->departure_location !!}</td>
              <td>{!! $package->arrival_date !!}</td>
              <td>{!! $package->arrival_location !!}</td>
              <td>{!! $package->price !!}</td>
              <td>{!! $package->cruise->cruise_name !!}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  @endsection