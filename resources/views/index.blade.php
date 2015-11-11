@extends('shared.app')
  
  @section('script')
    @include('_indexJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <div class="jumbotron">
          <h1>Welcome to Pricess Cruise</h1>
          <h3>Pricess Cruise is the well known, and largest cruise operator in the world.</h3>
          <p><font color="grey">Book your cruise ticket right, to start your amazing journey!</font></p>
          <p><a class="btn btn-primary btn-lg" href="/booking">Book Ticket</a></p>
        </div>
      </div>
    </div>
    
  @endsection